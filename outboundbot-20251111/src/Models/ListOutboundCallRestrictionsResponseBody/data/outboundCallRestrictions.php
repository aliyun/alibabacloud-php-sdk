<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20251111\Models\ListOutboundCallRestrictionsResponseBody\data;

use AlibabaCloud\Dara\Model;

class outboundCallRestrictions extends Model
{
    /**
     * @var int
     */
    public $createdTime;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $number;

    /**
     * @var int
     */
    public $policy;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $restrictionId;
    protected $_name = [
        'createdTime' => 'CreatedTime',
        'creator' => 'Creator',
        'number' => 'Number',
        'policy' => 'Policy',
        'remark' => 'Remark',
        'restrictionId' => 'RestrictionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }

        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }

        if (null !== $this->number) {
            $res['Number'] = $this->number;
        }

        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->restrictionId) {
            $res['RestrictionId'] = $this->restrictionId;
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
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }

        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }

        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }

        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['RestrictionId'])) {
            $model->restrictionId = $map['RestrictionId'];
        }

        return $model;
    }
}
