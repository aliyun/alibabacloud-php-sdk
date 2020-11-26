<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Tea\Model;

class CreateFaceConfigRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $bizName;
    protected $_name = [
        'sourceIp' => 'SourceIp',
        'lang'     => 'Lang',
        'bizType'  => 'BizType',
        'bizName'  => 'BizName',
    ];

    public function validate()
    {
        Model::validateRequired('bizType', $this->bizType, true);
        Model::validateRequired('bizName', $this->bizName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->bizName) {
            $res['BizName'] = $this->bizName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFaceConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['BizName'])) {
            $model->bizName = $map['BizName'];
        }

        return $model;
    }
}
