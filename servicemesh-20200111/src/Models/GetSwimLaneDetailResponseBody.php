<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Dara\Model;

class GetSwimLaneDetailResponseBody extends Model
{
    /**
     * @var string
     */
    public $ingressRule;

    /**
     * @var string
     */
    public $ingressService;

    /**
     * @var string
     */
    public $labelSelectorKey;

    /**
     * @var string
     */
    public $labelSelectorValue;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $servicesList;

    /**
     * @var string
     */
    public $validationMessage;

    /**
     * @var string
     */
    public $weightedIngressDestination;
    protected $_name = [
        'ingressRule' => 'IngressRule',
        'ingressService' => 'IngressService',
        'labelSelectorKey' => 'LabelSelectorKey',
        'labelSelectorValue' => 'LabelSelectorValue',
        'requestId' => 'RequestId',
        'servicesList' => 'ServicesList',
        'validationMessage' => 'ValidationMessage',
        'weightedIngressDestination' => 'WeightedIngressDestination',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ingressRule) {
            $res['IngressRule'] = $this->ingressRule;
        }

        if (null !== $this->ingressService) {
            $res['IngressService'] = $this->ingressService;
        }

        if (null !== $this->labelSelectorKey) {
            $res['LabelSelectorKey'] = $this->labelSelectorKey;
        }

        if (null !== $this->labelSelectorValue) {
            $res['LabelSelectorValue'] = $this->labelSelectorValue;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->servicesList) {
            $res['ServicesList'] = $this->servicesList;
        }

        if (null !== $this->validationMessage) {
            $res['ValidationMessage'] = $this->validationMessage;
        }

        if (null !== $this->weightedIngressDestination) {
            $res['WeightedIngressDestination'] = $this->weightedIngressDestination;
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
        if (isset($map['IngressRule'])) {
            $model->ingressRule = $map['IngressRule'];
        }

        if (isset($map['IngressService'])) {
            $model->ingressService = $map['IngressService'];
        }

        if (isset($map['LabelSelectorKey'])) {
            $model->labelSelectorKey = $map['LabelSelectorKey'];
        }

        if (isset($map['LabelSelectorValue'])) {
            $model->labelSelectorValue = $map['LabelSelectorValue'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ServicesList'])) {
            $model->servicesList = $map['ServicesList'];
        }

        if (isset($map['ValidationMessage'])) {
            $model->validationMessage = $map['ValidationMessage'];
        }

        if (isset($map['WeightedIngressDestination'])) {
            $model->weightedIngressDestination = $map['WeightedIngressDestination'];
        }

        return $model;
    }
}
