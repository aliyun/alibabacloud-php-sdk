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
        'actualMinQuota'  => 'ActualMinQuota',
        'desiredMinQuota' => 'DesiredMinQuota',
        'requestedQuota'  => 'RequestedQuota',
        'usedQuota'       => 'UsedQuota',
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
        if (null !== $this->desiredMinQuota) {
            $res['DesiredMinQuota'] = null !== $this->desiredMinQuota ? $this->desiredMinQuota->toMap() : null;
        }
        if (null !== $this->requestedQuota) {
            $res['RequestedQuota'] = null !== $this->requestedQuota ? $this->requestedQuota->toMap() : null;
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
