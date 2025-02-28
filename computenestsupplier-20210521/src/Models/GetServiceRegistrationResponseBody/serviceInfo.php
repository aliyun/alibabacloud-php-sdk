<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceRegistrationResponseBody;

use AlibabaCloud\Dara\Model;

class serviceInfo extends Model
{
    /**
     * @var string
     */
    public $serviceType;
    /**
     * @var string
     */
    public $trialType;
    /**
     * @var string
     */
    public $versionName;
    protected $_name = [
        'serviceType' => 'ServiceType',
        'trialType'   => 'TrialType',
        'versionName' => 'VersionName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->serviceType) {
            $res['ServiceType'] = $this->serviceType;
        }

        if (null !== $this->trialType) {
            $res['TrialType'] = $this->trialType;
        }

        if (null !== $this->versionName) {
            $res['VersionName'] = $this->versionName;
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
        if (isset($map['ServiceType'])) {
            $model->serviceType = $map['ServiceType'];
        }

        if (isset($map['TrialType'])) {
            $model->trialType = $map['TrialType'];
        }

        if (isset($map['VersionName'])) {
            $model->versionName = $map['VersionName'];
        }

        return $model;
    }
}
