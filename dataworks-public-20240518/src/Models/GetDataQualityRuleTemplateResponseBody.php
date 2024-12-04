<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDataQualityRuleTemplateResponseBody\dataQualityRuleTemplate;
use AlibabaCloud\Tea\Model;

class GetDataQualityRuleTemplateResponseBody extends Model
{
    /**
     * @var dataQualityRuleTemplate
     */
    public $dataQualityRuleTemplate;

    /**
     * @example 691CA452-D37A-4ED0-9441
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dataQualityRuleTemplate' => 'DataQualityRuleTemplate',
        'requestId'               => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataQualityRuleTemplate) {
            $res['DataQualityRuleTemplate'] = null !== $this->dataQualityRuleTemplate ? $this->dataQualityRuleTemplate->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDataQualityRuleTemplateResponseBody
     */
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
