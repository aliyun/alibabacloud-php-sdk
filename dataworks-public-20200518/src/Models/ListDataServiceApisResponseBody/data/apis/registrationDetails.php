<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceApisResponseBody\data\apis;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceApisResponseBody\data\apis\registrationDetails\registrationErrorCodes;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceApisResponseBody\data\apis\registrationDetails\registrationRequestParameters;

class registrationDetails extends Model
{
    /**
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
     * @var int
     */
    public $serviceContentType;
    /**
     * @var string
     */
    public $serviceHost;
    /**
     * @var string
     */
    public $servicePath;
    /**
     * @var string
     */
    public $serviceRequestBodyDescription;
    /**
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
        if (\is_array($this->registrationErrorCodes)) {
            Model::validateArray($this->registrationErrorCodes);
        }
        if (\is_array($this->registrationRequestParameters)) {
            Model::validateArray($this->registrationRequestParameters);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failedResultSample) {
            $res['FailedResultSample'] = $this->failedResultSample;
        }

        if (null !== $this->registrationErrorCodes) {
            if (\is_array($this->registrationErrorCodes)) {
                $res['RegistrationErrorCodes'] = [];
                $n1                            = 0;
                foreach ($this->registrationErrorCodes as $item1) {
                    $res['RegistrationErrorCodes'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->registrationRequestParameters) {
            if (\is_array($this->registrationRequestParameters)) {
                $res['RegistrationRequestParameters'] = [];
                $n1                                   = 0;
                foreach ($this->registrationRequestParameters as $item1) {
                    $res['RegistrationRequestParameters'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailedResultSample'])) {
            $model->failedResultSample = $map['FailedResultSample'];
        }

        if (isset($map['RegistrationErrorCodes'])) {
            if (!empty($map['RegistrationErrorCodes'])) {
                $model->registrationErrorCodes = [];
                $n1                            = 0;
                foreach ($map['RegistrationErrorCodes'] as $item1) {
                    $model->registrationErrorCodes[$n1++] = registrationErrorCodes::fromMap($item1);
                }
            }
        }

        if (isset($map['RegistrationRequestParameters'])) {
            if (!empty($map['RegistrationRequestParameters'])) {
                $model->registrationRequestParameters = [];
                $n1                                   = 0;
                foreach ($map['RegistrationRequestParameters'] as $item1) {
                    $model->registrationRequestParameters[$n1++] = registrationRequestParameters::fromMap($item1);
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
