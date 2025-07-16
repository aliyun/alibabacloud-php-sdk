<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\GetAssistantCapabilityResponseBody\capabilityAssessment;
use AlibabaCloud\Tea\Model;

class GetAssistantCapabilityResponseBody extends Model
{
    /**
     * @example 助理描述
     *
     * @var string
     */
    public $assistantDescription;

    /**
     * @example true
     *
     * @var bool
     */
    public $canHandle;

    /**
     * @example {}
     *
     * @var capabilityAssessment
     */
    public $capabilityAssessment;

    /**
     * @example requestId
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'assistantDescription' => 'assistantDescription',
        'canHandle' => 'canHandle',
        'capabilityAssessment' => 'capabilityAssessment',
        'requestId' => 'requestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->assistantDescription) {
            $res['assistantDescription'] = $this->assistantDescription;
        }
        if (null !== $this->canHandle) {
            $res['canHandle'] = $this->canHandle;
        }
        if (null !== $this->capabilityAssessment) {
            $res['capabilityAssessment'] = null !== $this->capabilityAssessment ? $this->capabilityAssessment->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAssistantCapabilityResponseBody
     */
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
