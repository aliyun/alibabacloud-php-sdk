<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pai\V20240521\Models;

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
    public $desiredMinQuota;

    /**
     * @var ResourceAmount
     */
    public $requestedQuota;

    /**
     * @var ResourceAmount
     */
    public $usedQuota;
    protected $_name = [
        'actualMinQuota' => 'ActualMinQuota',
        'desiredMinQuota' => 'DesiredMinQuota',
        'requestedQuota' => 'RequestedQuota',
        'usedQuota' => 'UsedQuota',
    ];

    public function validate()
    {
        if (null !== $this->actualMinQuota) {
            $this->actualMinQuota->validate();
        }
        if (null !== $this->desiredMinQuota) {
            $this->desiredMinQuota->validate();
        }
        if (null !== $this->requestedQuota) {
            $this->requestedQuota->validate();
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

        if (null !== $this->desiredMinQuota) {
            $res['DesiredMinQuota'] = null !== $this->desiredMinQuota ? $this->desiredMinQuota->toArray($noStream) : $this->desiredMinQuota;
        }

        if (null !== $this->requestedQuota) {
            $res['RequestedQuota'] = null !== $this->requestedQuota ? $this->requestedQuota->toArray($noStream) : $this->requestedQuota;
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

        if (isset($map['DesiredMinQuota'])) {
            $model->desiredMinQuota = ResourceAmount::fromMap($map['DesiredMinQuota']);
        }

        if (isset($map['RequestedQuota'])) {
            $model->requestedQuota = ResourceAmount::fromMap($map['RequestedQuota']);
        }

        if (isset($map['UsedQuota'])) {
            $model->usedQuota = ResourceAmount::fromMap($map['UsedQuota']);
        }

        return $model;
    }
}
