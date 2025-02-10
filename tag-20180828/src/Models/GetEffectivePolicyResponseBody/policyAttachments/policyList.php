<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tag\V20180828\Models\GetEffectivePolicyResponseBody\policyAttachments;

use AlibabaCloud\Dara\Model;

class policyList extends Model
{
    /**
     * @var int
     */
    public $attachSeq;
    /**
     * @var string
     */
    public $attachTime;
    /**
     * @var string
     */
    public $policyId;
    /**
     * @var string
     */
    public $policyName;
    /**
     * @var string
     */
    public $targetId;
    /**
     * @var string
     */
    public $targetType;
    protected $_name = [
        'attachSeq'  => 'AttachSeq',
        'attachTime' => 'AttachTime',
        'policyId'   => 'PolicyId',
        'policyName' => 'PolicyName',
        'targetId'   => 'TargetId',
        'targetType' => 'TargetType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attachSeq) {
            $res['AttachSeq'] = $this->attachSeq;
        }

        if (null !== $this->attachTime) {
            $res['AttachTime'] = $this->attachTime;
        }

        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }

        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }

        if (null !== $this->targetId) {
            $res['TargetId'] = $this->targetId;
        }

        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
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
        if (isset($map['AttachSeq'])) {
            $model->attachSeq = $map['AttachSeq'];
        }

        if (isset($map['AttachTime'])) {
            $model->attachTime = $map['AttachTime'];
        }

        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }

        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }

        if (isset($map['TargetId'])) {
            $model->targetId = $map['TargetId'];
        }

        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        return $model;
    }
}
