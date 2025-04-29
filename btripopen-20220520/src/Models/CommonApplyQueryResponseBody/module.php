<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\CommonApplyQueryResponseBody;

use AlibabaCloud\Dara\Model;

class module extends Model
{
    /**
     * @var int
     */
    public $applyId;

    /**
     * @var int
     */
    public $bizCategory;

    /**
     * @var string
     */
    public $cause;

    /**
     * @var string
     */
    public $corpId;

    /**
     * @var string
     */
    public $extendValue;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $thirdpartCorpId;

    /**
     * @var string
     */
    public $thirdpartId;

    /**
     * @var string
     */
    public $tripCause;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'applyId' => 'apply_id',
        'bizCategory' => 'biz_category',
        'cause' => 'cause',
        'corpId' => 'corp_id',
        'extendValue' => 'extend_value',
        'gmtCreate' => 'gmt_create',
        'status' => 'status',
        'thirdpartCorpId' => 'thirdpart_corp_id',
        'thirdpartId' => 'thirdpart_id',
        'tripCause' => 'trip_cause',
        'userId' => 'user_id',
        'userName' => 'user_name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applyId) {
            $res['apply_id'] = $this->applyId;
        }

        if (null !== $this->bizCategory) {
            $res['biz_category'] = $this->bizCategory;
        }

        if (null !== $this->cause) {
            $res['cause'] = $this->cause;
        }

        if (null !== $this->corpId) {
            $res['corp_id'] = $this->corpId;
        }

        if (null !== $this->extendValue) {
            $res['extend_value'] = $this->extendValue;
        }

        if (null !== $this->gmtCreate) {
            $res['gmt_create'] = $this->gmtCreate;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->thirdpartCorpId) {
            $res['thirdpart_corp_id'] = $this->thirdpartCorpId;
        }

        if (null !== $this->thirdpartId) {
            $res['thirdpart_id'] = $this->thirdpartId;
        }

        if (null !== $this->tripCause) {
            $res['trip_cause'] = $this->tripCause;
        }

        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
        }

        if (null !== $this->userName) {
            $res['user_name'] = $this->userName;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['apply_id'])) {
            $model->applyId = $map['apply_id'];
        }

        if (isset($map['biz_category'])) {
            $model->bizCategory = $map['biz_category'];
        }

        if (isset($map['cause'])) {
            $model->cause = $map['cause'];
        }

        if (isset($map['corp_id'])) {
            $model->corpId = $map['corp_id'];
        }

        if (isset($map['extend_value'])) {
            $model->extendValue = $map['extend_value'];
        }

        if (isset($map['gmt_create'])) {
            $model->gmtCreate = $map['gmt_create'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['thirdpart_corp_id'])) {
            $model->thirdpartCorpId = $map['thirdpart_corp_id'];
        }

        if (isset($map['thirdpart_id'])) {
            $model->thirdpartId = $map['thirdpart_id'];
        }

        if (isset($map['trip_cause'])) {
            $model->tripCause = $map['trip_cause'];
        }

        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }

        if (isset($map['user_name'])) {
            $model->userName = $map['user_name'];
        }

        return $model;
    }
}
