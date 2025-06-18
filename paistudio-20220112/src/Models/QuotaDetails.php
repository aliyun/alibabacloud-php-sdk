<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;

class QuotaDetails extends Model
{
    /**
     * @var ResourceAmount
     */
    public $actualMinQuota;

    /**
     * @var ResourceAmount
     */
    public $allocatedQuota;

    /**
     * @var ResourceAmount
     */
    public $ancestorsAllocatedQuota;

    /**
     * @var ResourceAmount
     */
    public $descendantsAllocatedQuota;

    /**
     * @var ResourceAmount
     */
    public $desiredMinQuota;

    /**
     * @var ResourceAmount
     */
    public $requestedQuota;

    /**
     * @var ResourceAmount
     */
    public $selfAllocatedQuota;

    /**
     * @var ResourceAmount
     */
    public $selfSubmittedQuota;

    /**
     * @var ResourceAmount
     */
    public $usedQuota;
    protected $_name = [
        'actualMinQuota' => 'ActualMinQuota',
        'allocatedQuota' => 'AllocatedQuota',
        'ancestorsAllocatedQuota' => 'AncestorsAllocatedQuota',
        'descendantsAllocatedQuota' => 'DescendantsAllocatedQuota',
        'desiredMinQuota' => 'DesiredMinQuota',
        'requestedQuota' => 'RequestedQuota',
        'selfAllocatedQuota' => 'SelfAllocatedQuota',
        'selfSubmittedQuota' => 'SelfSubmittedQuota',
        'usedQuota' => 'UsedQuota',
    ];

    public function validate()
    {
        if (null !== $this->actualMinQuota) {
            $this->actualMinQuota->validate();
        }
        if (null !== $this->allocatedQuota) {
            $this->allocatedQuota->validate();
        }
        if (null !== $this->ancestorsAllocatedQuota) {
            $this->ancestorsAllocatedQuota->validate();
        }
        if (null !== $this->descendantsAllocatedQuota) {
            $this->descendantsAllocatedQuota->validate();
        }
        if (null !== $this->desiredMinQuota) {
            $this->desiredMinQuota->validate();
        }
        if (null !== $this->requestedQuota) {
            $this->requestedQuota->validate();
        }
        if (null !== $this->selfAllocatedQuota) {
            $this->selfAllocatedQuota->validate();
        }
        if (null !== $this->selfSubmittedQuota) {
            $this->selfSubmittedQuota->validate();
        }
        if (null !== $this->usedQuota) {
            $this->usedQuota->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actualMinQuota) {
            $res['ActualMinQuota'] = null !== $this->actualMinQuota ? $this->actualMinQuota->toArray($noStream) : $this->actualMinQuota;
        }

        if (null !== $this->allocatedQuota) {
            $res['AllocatedQuota'] = null !== $this->allocatedQuota ? $this->allocatedQuota->toArray($noStream) : $this->allocatedQuota;
        }

        if (null !== $this->ancestorsAllocatedQuota) {
            $res['AncestorsAllocatedQuota'] = null !== $this->ancestorsAllocatedQuota ? $this->ancestorsAllocatedQuota->toArray($noStream) : $this->ancestorsAllocatedQuota;
        }

        if (null !== $this->descendantsAllocatedQuota) {
            $res['DescendantsAllocatedQuota'] = null !== $this->descendantsAllocatedQuota ? $this->descendantsAllocatedQuota->toArray($noStream) : $this->descendantsAllocatedQuota;
        }

        if (null !== $this->desiredMinQuota) {
            $res['DesiredMinQuota'] = null !== $this->desiredMinQuota ? $this->desiredMinQuota->toArray($noStream) : $this->desiredMinQuota;
        }

        if (null !== $this->requestedQuota) {
            $res['RequestedQuota'] = null !== $this->requestedQuota ? $this->requestedQuota->toArray($noStream) : $this->requestedQuota;
        }

        if (null !== $this->selfAllocatedQuota) {
            $res['SelfAllocatedQuota'] = null !== $this->selfAllocatedQuota ? $this->selfAllocatedQuota->toArray($noStream) : $this->selfAllocatedQuota;
        }

        if (null !== $this->selfSubmittedQuota) {
            $res['SelfSubmittedQuota'] = null !== $this->selfSubmittedQuota ? $this->selfSubmittedQuota->toArray($noStream) : $this->selfSubmittedQuota;
        }

        if (null !== $this->usedQuota) {
            $res['UsedQuota'] = null !== $this->usedQuota ? $this->usedQuota->toArray($noStream) : $this->usedQuota;
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
        if (isset($map['ActualMinQuota'])) {
            $model->actualMinQuota = ResourceAmount::fromMap($map['ActualMinQuota']);
        }

        if (isset($map['AllocatedQuota'])) {
            $model->allocatedQuota = ResourceAmount::fromMap($map['AllocatedQuota']);
        }

        if (isset($map['AncestorsAllocatedQuota'])) {
            $model->ancestorsAllocatedQuota = ResourceAmount::fromMap($map['AncestorsAllocatedQuota']);
        }

        if (isset($map['DescendantsAllocatedQuota'])) {
            $model->descendantsAllocatedQuota = ResourceAmount::fromMap($map['DescendantsAllocatedQuota']);
        }

        if (isset($map['DesiredMinQuota'])) {
            $model->desiredMinQuota = ResourceAmount::fromMap($map['DesiredMinQuota']);
        }

        if (isset($map['RequestedQuota'])) {
            $model->requestedQuota = ResourceAmount::fromMap($map['RequestedQuota']);
        }

        if (isset($map['SelfAllocatedQuota'])) {
            $model->selfAllocatedQuota = ResourceAmount::fromMap($map['SelfAllocatedQuota']);
        }

        if (isset($map['SelfSubmittedQuota'])) {
            $model->selfSubmittedQuota = ResourceAmount::fromMap($map['SelfSubmittedQuota']);
        }

        if (isset($map['UsedQuota'])) {
            $model->usedQuota = ResourceAmount::fromMap($map['UsedQuota']);
        }

        return $model;
    }
}
