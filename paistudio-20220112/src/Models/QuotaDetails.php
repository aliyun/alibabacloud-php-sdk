<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

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
    public $usedQuota;
    protected $_name = [
        'actualMinQuota'            => 'ActualMinQuota',
        'allocatedQuota'            => 'AllocatedQuota',
        'ancestorsAllocatedQuota'   => 'AncestorsAllocatedQuota',
        'descendantsAllocatedQuota' => 'DescendantsAllocatedQuota',
        'desiredMinQuota'           => 'DesiredMinQuota',
        'requestedQuota'            => 'RequestedQuota',
        'selfAllocatedQuota'        => 'SelfAllocatedQuota',
        'usedQuota'                 => 'UsedQuota',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actualMinQuota) {
            $res['ActualMinQuota'] = null !== $this->actualMinQuota ? $this->actualMinQuota->toMap() : null;
        }
        if (null !== $this->allocatedQuota) {
            $res['AllocatedQuota'] = null !== $this->allocatedQuota ? $this->allocatedQuota->toMap() : null;
        }
        if (null !== $this->ancestorsAllocatedQuota) {
            $res['AncestorsAllocatedQuota'] = null !== $this->ancestorsAllocatedQuota ? $this->ancestorsAllocatedQuota->toMap() : null;
        }
        if (null !== $this->descendantsAllocatedQuota) {
            $res['DescendantsAllocatedQuota'] = null !== $this->descendantsAllocatedQuota ? $this->descendantsAllocatedQuota->toMap() : null;
        }
        if (null !== $this->desiredMinQuota) {
            $res['DesiredMinQuota'] = null !== $this->desiredMinQuota ? $this->desiredMinQuota->toMap() : null;
        }
        if (null !== $this->requestedQuota) {
            $res['RequestedQuota'] = null !== $this->requestedQuota ? $this->requestedQuota->toMap() : null;
        }
        if (null !== $this->selfAllocatedQuota) {
            $res['SelfAllocatedQuota'] = null !== $this->selfAllocatedQuota ? $this->selfAllocatedQuota->toMap() : null;
        }
        if (null !== $this->usedQuota) {
            $res['UsedQuota'] = null !== $this->usedQuota ? $this->usedQuota->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QuotaDetails
     */
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
        if (isset($map['UsedQuota'])) {
            $model->usedQuota = ResourceAmount::fromMap($map['UsedQuota']);
        }

        return $model;
    }
}
