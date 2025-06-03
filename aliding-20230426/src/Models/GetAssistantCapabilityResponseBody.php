<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetAssistantCapabilityResponseBody\capabilityAssessment;

class GetAssistantCapabilityResponseBody extends Model
{
    /**
     * @var string
     */
    public $assistantDescription;

    /**
     * @var bool
     */
    public $canHandle;

    /**
     * @var capabilityAssessment
     */
    public $capabilityAssessment;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'assistantDescription' => 'assistantDescription',
        'canHandle' => 'canHandle',
        'capabilityAssessment' => 'capabilityAssessment',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (null !== $this->capabilityAssessment) {
            $this->capabilityAssessment->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assistantDescription) {
            $res['assistantDescription'] = $this->assistantDescription;
        }

        if (null !== $this->canHandle) {
            $res['canHandle'] = $this->canHandle;
        }

        if (null !== $this->capabilityAssessment) {
            $res['capabilityAssessment'] = null !== $this->capabilityAssessment ? $this->capabilityAssessment->toArray($noStream) : $this->capabilityAssessment;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['assistantDescription'])) {
            $model->assistantDescription = $map['assistantDescription'];
        }

        if (isset($map['canHandle'])) {
            $model->canHandle = $map['canHandle'];
        }

        if (isset($map['capabilityAssessment'])) {
            $model->capabilityAssessment = capabilityAssessment::fromMap($map['capabilityAssessment']);
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
