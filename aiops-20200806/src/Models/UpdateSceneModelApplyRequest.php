<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiops\V20200806\Models;

use AlibabaCloud\Tea\Model;

class UpdateSceneModelApplyRequest extends Model
{
    /**
     * @var string
     */
    public $applyContent;

    /**
     * @var int
     */
    public $applyId;

    /**
     * @var int
     */
    public $applyStatus;

    /**
     * @var string
     */
    public $operaUid;
    protected $_name = [
        'applyContent' => 'ApplyContent',
        'applyId'      => 'ApplyId',
        'applyStatus'  => 'ApplyStatus',
        'operaUid'     => 'OperaUid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applyContent) {
            $res['ApplyContent'] = $this->applyContent;
        }
        if (null !== $this->applyId) {
            $res['ApplyId'] = $this->applyId;
        }
        if (null !== $this->applyStatus) {
            $res['ApplyStatus'] = $this->applyStatus;
        }
        if (null !== $this->operaUid) {
            $res['OperaUid'] = $this->operaUid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateSceneModelApplyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplyContent'])) {
            $model->applyContent = $map['ApplyContent'];
        }
        if (isset($map['ApplyId'])) {
            $model->applyId = $map['ApplyId'];
        }
        if (isset($map['ApplyStatus'])) {
            $model->applyStatus = $map['ApplyStatus'];
        }
        if (isset($map['OperaUid'])) {
            $model->operaUid = $map['OperaUid'];
        }

        return $model;
    }
}
