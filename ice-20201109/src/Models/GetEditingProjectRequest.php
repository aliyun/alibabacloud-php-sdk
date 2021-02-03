<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class GetEditingProjectRequest extends Model
{
    /**
     * @description 云剪辑工程ID
     *
     * @var string
     */
    public $projectId;

    /**
     * @description 是否返回编辑器数据结构
     *
     * @var int
     */
    public $FEExtendFlag;
    protected $_name = [
        'projectId'    => 'ProjectId',
        'FEExtendFlag' => 'FEExtendFlag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->FEExtendFlag) {
            $res['FEExtendFlag'] = $this->FEExtendFlag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetEditingProjectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['FEExtendFlag'])) {
            $model->FEExtendFlag = $map['FEExtendFlag'];
        }

        return $model;
    }
}
