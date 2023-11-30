<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\SDK\Pds\V20220301\Models\BasePunishLogResponse\punishee;
use AlibabaCloud\SDK\Pds\V20220301\Models\BasePunishLogResponse\punishmentDetail;
use AlibabaCloud\Tea\Model;

class BasePunishLogResponse extends Model
{
    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $punishedAt;

    /**
     * @var punishee
     */
    public $punishee;

    /**
     * @var punishmentDetail
     */
    public $punishmentDetail;

    /**
     * @var string
     */
    public $punishmentId;

    /**
     * @var string
     */
    public $punishmentOperation;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'errorCode'           => 'error_code',
        'errorMessage'        => 'error_message',
        'punishedAt'          => 'punished_at',
        'punishee'            => 'punishee',
        'punishmentDetail'    => 'punishment_detail',
        'punishmentId'        => 'punishment_id',
        'punishmentOperation' => 'punishment_operation',
        'status'              => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['error_code'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['error_message'] = $this->errorMessage;
        }
        if (null !== $this->punishedAt) {
            $res['punished_at'] = $this->punishedAt;
        }
        if (null !== $this->punishee) {
            $res['punishee'] = null !== $this->punishee ? $this->punishee->toMap() : null;
        }
        if (null !== $this->punishmentDetail) {
            $res['punishment_detail'] = null !== $this->punishmentDetail ? $this->punishmentDetail->toMap() : null;
        }
        if (null !== $this->punishmentId) {
            $res['punishment_id'] = $this->punishmentId;
        }
        if (null !== $this->punishmentOperation) {
            $res['punishment_operation'] = $this->punishmentOperation;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BasePunishLogResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['error_code'])) {
            $model->errorCode = $map['error_code'];
        }
        if (isset($map['error_message'])) {
            $model->errorMessage = $map['error_message'];
        }
        if (isset($map['punished_at'])) {
            $model->punishedAt = $map['punished_at'];
        }
        if (isset($map['punishee'])) {
            $model->punishee = punishee::fromMap($map['punishee']);
        }
        if (isset($map['punishment_detail'])) {
            $model->punishmentDetail = punishmentDetail::fromMap($map['punishment_detail']);
        }
        if (isset($map['punishment_id'])) {
            $model->punishmentId = $map['punishment_id'];
        }
        if (isset($map['punishment_operation'])) {
            $model->punishmentOperation = $map['punishment_operation'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
