<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetAgentTaskResultResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetAgentTaskResultResponseBody\data\response\customerPromptResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetAgentTaskResultResponseBody\data\response\fieldResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetAgentTaskResultResponseBody\data\response\serviceInspectionResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetAgentTaskResultResponseBody\data\response\tagCategoryResponse;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetAgentTaskResultResponseBody\data\response\voiceprintResponse;

class response extends Model
{
    /**
     * @var customerPromptResponse
     */
    public $customerPromptResponse;

    /**
     * @var fieldResponse
     */
    public $fieldResponse;

    /**
     * @var serviceInspectionResponse
     */
    public $serviceInspectionResponse;

    /**
     * @var tagCategoryResponse
     */
    public $tagCategoryResponse;

    /**
     * @var voiceprintResponse
     */
    public $voiceprintResponse;
    protected $_name = [
        'customerPromptResponse' => 'CustomerPromptResponse',
        'fieldResponse' => 'FieldResponse',
        'serviceInspectionResponse' => 'ServiceInspectionResponse',
        'tagCategoryResponse' => 'TagCategoryResponse',
        'voiceprintResponse' => 'VoiceprintResponse',
    ];

    public function validate()
    {
        if (null !== $this->customerPromptResponse) {
            $this->customerPromptResponse->validate();
        }
        if (null !== $this->fieldResponse) {
            $this->fieldResponse->validate();
        }
        if (null !== $this->serviceInspectionResponse) {
            $this->serviceInspectionResponse->validate();
        }
        if (null !== $this->tagCategoryResponse) {
            $this->tagCategoryResponse->validate();
        }
        if (null !== $this->voiceprintResponse) {
            $this->voiceprintResponse->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customerPromptResponse) {
            $res['CustomerPromptResponse'] = null !== $this->customerPromptResponse ? $this->customerPromptResponse->toArray($noStream) : $this->customerPromptResponse;
        }

        if (null !== $this->fieldResponse) {
            $res['FieldResponse'] = null !== $this->fieldResponse ? $this->fieldResponse->toArray($noStream) : $this->fieldResponse;
        }

        if (null !== $this->serviceInspectionResponse) {
            $res['ServiceInspectionResponse'] = null !== $this->serviceInspectionResponse ? $this->serviceInspectionResponse->toArray($noStream) : $this->serviceInspectionResponse;
        }

        if (null !== $this->tagCategoryResponse) {
            $res['TagCategoryResponse'] = null !== $this->tagCategoryResponse ? $this->tagCategoryResponse->toArray($noStream) : $this->tagCategoryResponse;
        }

        if (null !== $this->voiceprintResponse) {
            $res['VoiceprintResponse'] = null !== $this->voiceprintResponse ? $this->voiceprintResponse->toArray($noStream) : $this->voiceprintResponse;
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
        if (isset($map['CustomerPromptResponse'])) {
            $model->customerPromptResponse = customerPromptResponse::fromMap($map['CustomerPromptResponse']);
        }

        if (isset($map['FieldResponse'])) {
            $model->fieldResponse = fieldResponse::fromMap($map['FieldResponse']);
        }

        if (isset($map['ServiceInspectionResponse'])) {
            $model->serviceInspectionResponse = serviceInspectionResponse::fromMap($map['ServiceInspectionResponse']);
        }

        if (isset($map['TagCategoryResponse'])) {
            $model->tagCategoryResponse = tagCategoryResponse::fromMap($map['TagCategoryResponse']);
        }

        if (isset($map['VoiceprintResponse'])) {
            $model->voiceprintResponse = voiceprintResponse::fromMap($map['VoiceprintResponse']);
        }

        return $model;
    }
}
