<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models;

use AlibabaCloud\Dara\Model;

class ValidateServiceInstanceNameRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var bool
     */
    public $isTrial;

    /**
     * @var string
     */
    public $serviceId;

    /**
     * @var string
     */
    public $serviceInstanceName;

    /**
     * @var string
     */
    public $serviceVersion;

    /**
     * @var string
     */
    public $templateName;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'isTrial' => 'IsTrial',
        'serviceId' => 'ServiceId',
        'serviceInstanceName' => 'ServiceInstanceName',
        'serviceVersion' => 'ServiceVersion',
        'templateName' => 'TemplateName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->isTrial) {
            $res['IsTrial'] = $this->isTrial;
        }

        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }

        if (null !== $this->serviceInstanceName) {
            $res['ServiceInstanceName'] = $this->serviceInstanceName;
        }

        if (null !== $this->serviceVersion) {
            $res['ServiceVersion'] = $this->serviceVersion;
        }

        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['IsTrial'])) {
            $model->isTrial = $map['IsTrial'];
        }

        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }

        if (isset($map['ServiceInstanceName'])) {
            $model->serviceInstanceName = $map['ServiceInstanceName'];
        }

        if (isset($map['ServiceVersion'])) {
            $model->serviceVersion = $map['ServiceVersion'];
        }

        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        return $model;
    }
}
