<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterQueryClientDiscountLogsResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $clientId;

    /**
     * @var int
     */
    public $deleteTag;

    /**
     * @var float
     */
    public $discount;

    /**
     * @var string
     */
    public $effectiveTime;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $remark;
    protected $_name = [
        'clientId' => 'clientId',
        'deleteTag' => 'deleteTag',
        'discount' => 'discount',
        'effectiveTime' => 'effectiveTime',
        'expireTime' => 'expireTime',
        'gmtCreate' => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'id' => 'id',
        'remark' => 'remark',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientId) {
            $res['clientId'] = $this->clientId;
        }

        if (null !== $this->deleteTag) {
            $res['deleteTag'] = $this->deleteTag;
        }

        if (null !== $this->discount) {
            $res['discount'] = $this->discount;
        }

        if (null !== $this->effectiveTime) {
            $res['effectiveTime'] = $this->effectiveTime;
        }

        if (null !== $this->expireTime) {
            $res['expireTime'] = $this->expireTime;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->remark) {
            $res['remark'] = $this->remark;
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
        if (isset($map['clientId'])) {
            $model->clientId = $map['clientId'];
        }

        if (isset($map['deleteTag'])) {
            $model->deleteTag = $map['deleteTag'];
        }

        if (isset($map['discount'])) {
            $model->discount = $map['discount'];
        }

        if (isset($map['effectiveTime'])) {
            $model->effectiveTime = $map['effectiveTime'];
        }

        if (isset($map['expireTime'])) {
            $model->expireTime = $map['expireTime'];
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['remark'])) {
            $model->remark = $map['remark'];
        }

        return $model;
    }
}
