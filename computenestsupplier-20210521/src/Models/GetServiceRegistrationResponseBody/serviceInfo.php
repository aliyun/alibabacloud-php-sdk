<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceRegistrationResponseBody;

use AlibabaCloud\Tea\Model;

class serviceInfo extends Model
{
    /**
     * @description The type of the service. Valid values:
     *
     *   private: The service is a private service and is deployed within the account of a customer.
     *   managed: The service is a fully managed service and is deployed within the account of a service provider.
     *   operation: The service is a hosted O\\&M service.
     *
     * @example private
     *
     * @var string
     */
    public $serviceType;

    /**
     * @description The trial policy. Valid values:
     *
     *   Trial: Trials are supported.
     *   NotTrial: Trials are not supported.
     *
     * @example Trial
     *
     * @var string
     */
    public $trialType;

    /**
     * @description The version name.
     *
     * @example v1.0
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return serviceInfo
     */
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
