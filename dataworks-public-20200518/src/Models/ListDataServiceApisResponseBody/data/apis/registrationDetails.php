<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceApisResponseBody\data\apis;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceApisResponseBody\data\apis\registrationDetails\registrationErrorCodes;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceApisResponseBody\data\apis\registrationDetails\registrationRequestParameters;
use AlibabaCloud\Tea\Model;

class registrationDetails extends Model
{
    /**
     * @example {"success": false}
     *
     * @var string
     */
    public $failedResultSample;

    /**
     * @var registrationErrorCodes[]
     */
    public $registrationErrorCodes;

    /**
     * @var registrationRequestParameters[]
     */
    public $registrationRequestParameters;

    /**
     * @example 0
     *
     * @var int
     */
    public $serviceContentType;

    /**
     * @example http://example.aliyundoc.com
     *
     * @var string
     */
    public $serviceHost;

    /**
     * @example /index
     *
     * @var string
     */
    public $servicePath;

    /**
     * @example {"abc":1}
     *
     * @var string
     */
    public $serviceRequestBodyDescription;

    /**
     * @example {"success": true}
     *
     * @var string
     */
    public $successfulResultSample;
    protected $_name = [
        'failedResultSample'            => 'FailedResultSample',
        'registrationErrorCodes'        => 'RegistrationErrorCodes',
        'registrationRequestParameters' => 'RegistrationRequestParameters',
        'serviceContentType'            => 'ServiceContentType',
        'serviceHost'                   => 'ServiceHost',
        'servicePath'                   => 'ServicePath',
        'serviceRequestBodyDescription' => 'ServiceRequestBodyDescription',
        'successfulResultSample'        => 'SuccessfulResultSample',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failedResultSample) {
            $res['FailedResultSample'] = $this->failedResultSample;
        }
        if (null !== $this->registrationErrorCodes) {
            $res['RegistrationErrorCodes'] = [];
            if (null !== $this->registrationErrorCodes && \is_array($this->registrationErrorCodes)) {
                $n = 0;
                foreach ($this->registrationErrorCodes as $item) {
                    $res['RegistrationErrorCodes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->registrationRequestParameters) {
            $res['RegistrationRequestParameters'] = [];
            if (null !== $this->registrationRequestParameters && \is_array($this->registrationRequestParameters)) {
                $n = 0;
                foreach ($this->registrationRequestParameters as $item) {
                    $res['RegistrationRequestParameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->serviceContentType) {
            $res['ServiceContentType'] = $this->serviceContentType;
        }
        if (null !== $this->serviceHost) {
            $res['ServiceHost'] = $this->serviceHost;
        }
        if (null !== $this->servicePath) {
            $res['ServicePath'] = $this->servicePath;
        }
        if (null !== $this->serviceRequestBodyDescription) {
            $res['ServiceRequestBodyDescription'] = $this->serviceRequestBodyDescription;
        }
        if (null !== $this->successfulResultSample) {
            $res['SuccessfulResultSample'] = $this->successfulResultSample;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return registrationDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailedResultSample'])) {
            $model->failedResultSample = $map['FailedResultSample'];
        }
        if (isset($map['RegistrationErrorCodes'])) {
            if (!empty($map['RegistrationErrorCodes'])) {
                $model->registrationErrorCodes = [];
                $n                             = 0;
                foreach ($map['RegistrationErrorCodes'] as $item) {
                    $model->registrationErrorCodes[$n++] = null !== $item ? registrationErrorCodes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RegistrationRequestParameters'])) {
            if (!empty($map['RegistrationRequestParameters'])) {
                $model->registrationRequestParameters = [];
                $n                                    = 0;
                foreach ($map['RegistrationRequestParameters'] as $item) {
                    $model->registrationRequestParameters[$n++] = null !== $item ? registrationRequestParameters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ServiceContentType'])) {
            $model->serviceContentType = $map['ServiceContentType'];
        }
        if (isset($map['ServiceHost'])) {
            $model->serviceHost = $map['ServiceHost'];
        }
        if (isset($map['ServicePath'])) {
            $model->servicePath = $map['ServicePath'];
        }
        if (isset($map['ServiceRequestBodyDescription'])) {
            $model->serviceRequestBodyDescription = $map['ServiceRequestBodyDescription'];
        }
        if (isset($map['SuccessfulResultSample'])) {
            $model->successfulResultSample = $map['SuccessfulResultSample'];
        }

        return $model;
    }
}
