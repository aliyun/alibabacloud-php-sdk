<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDataQualityRuleTemplateResponseBody\dataQualityRuleTemplate;

class GetDataQualityRuleTemplateResponseBody extends Model
{
    /**
     * @var dataQualityRuleTemplate
     */
    public $dataQualityRuleTemplate;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dataQualityRuleTemplate' => 'DataQualityRuleTemplate',
        'requestId'               => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->dataQualityRuleTemplate) {
            $this->dataQualityRuleTemplate->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataQualityRuleTemplate) {
            $res['DataQualityRuleTemplate'] = null !== $this->dataQualityRuleTemplate ? $this->dataQualityRuleTemplate->toArray($noStream) : $this->dataQualityRuleTemplate;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DataQualityRuleTemplate'])) {
            $model->dataQualityRuleTemplate = dataQualityRuleTemplate::fromMap($map['DataQualityRuleTemplate']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
