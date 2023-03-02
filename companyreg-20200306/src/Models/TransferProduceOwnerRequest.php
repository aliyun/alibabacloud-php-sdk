<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Companyreg\V20200306\Models;

use AlibabaCloud\Tea\Model;

class TransferProduceOwnerRequest extends Model
{
    /**
     * @example P20210208152920000001
     *
     * @var string
     */
    public $bizId;

    /**
     * @example esp.companyreg_cloud
     *
     * @var string
     */
    public $bizType;

    /**
     * @example 15565
     *
     * @var int
     */
    public $personId;

    /**
     * @var string
     */
    public $remark;
    protected $_name = [
        'bizId'    => 'BizId',
        'bizType'  => 'BizType',
        'personId' => 'PersonId',
        'remark'   => 'Remark',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->personId) {
            $res['PersonId'] = $this->personId;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TransferProduceOwnerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['PersonId'])) {
            $model->personId = $map['PersonId'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        return $model;
    }
}
