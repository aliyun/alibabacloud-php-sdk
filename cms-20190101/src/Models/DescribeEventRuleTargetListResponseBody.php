<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleTargetListResponseBody\contactParameters;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleTargetListResponseBody\fcParameters;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleTargetListResponseBody\mnsParameters;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleTargetListResponseBody\openApiParameters;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleTargetListResponseBody\slsParameters;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleTargetListResponseBody\webhookParameters;

class DescribeEventRuleTargetListResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var contactParameters
     */
    public $contactParameters;

    /**
     * @var fcParameters
     */
    public $fcParameters;

    /**
     * @var string
     */
    public $message;

    /**
     * @var mnsParameters
     */
    public $mnsParameters;

    /**
     * @var openApiParameters
     */
    public $openApiParameters;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var slsParameters
     */
    public $slsParameters;

    /**
     * @var webhookParameters
     */
    public $webhookParameters;
    protected $_name = [
        'code' => 'Code',
        'contactParameters' => 'ContactParameters',
        'fcParameters' => 'FcParameters',
        'message' => 'Message',
        'mnsParameters' => 'MnsParameters',
        'openApiParameters' => 'OpenApiParameters',
        'requestId' => 'RequestId',
        'slsParameters' => 'SlsParameters',
        'webhookParameters' => 'WebhookParameters',
    ];

    public function validate()
    {
        if (null !== $this->contactParameters) {
            $this->contactParameters->validate();
        }
        if (null !== $this->fcParameters) {
            $this->fcParameters->validate();
        }
        if (null !== $this->mnsParameters) {
            $this->mnsParameters->validate();
        }
        if (null !== $this->openApiParameters) {
            $this->openApiParameters->validate();
        }
        if (null !== $this->slsParameters) {
            $this->slsParameters->validate();
        }
        if (null !== $this->webhookParameters) {
            $this->webhookParameters->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->contactParameters) {
            $res['ContactParameters'] = null !== $this->contactParameters ? $this->contactParameters->toArray($noStream) : $this->contactParameters;
        }

        if (null !== $this->fcParameters) {
            $res['FcParameters'] = null !== $this->fcParameters ? $this->fcParameters->toArray($noStream) : $this->fcParameters;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->mnsParameters) {
            $res['MnsParameters'] = null !== $this->mnsParameters ? $this->mnsParameters->toArray($noStream) : $this->mnsParameters;
        }

        if (null !== $this->openApiParameters) {
            $res['OpenApiParameters'] = null !== $this->openApiParameters ? $this->openApiParameters->toArray($noStream) : $this->openApiParameters;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->slsParameters) {
            $res['SlsParameters'] = null !== $this->slsParameters ? $this->slsParameters->toArray($noStream) : $this->slsParameters;
        }

        if (null !== $this->webhookParameters) {
            $res['WebhookParameters'] = null !== $this->webhookParameters ? $this->webhookParameters->toArray($noStream) : $this->webhookParameters;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['ContactParameters'])) {
            $model->contactParameters = contactParameters::fromMap($map['ContactParameters']);
        }

        if (isset($map['FcParameters'])) {
            $model->fcParameters = fcParameters::fromMap($map['FcParameters']);
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['MnsParameters'])) {
            $model->mnsParameters = mnsParameters::fromMap($map['MnsParameters']);
        }

        if (isset($map['OpenApiParameters'])) {
            $model->openApiParameters = openApiParameters::fromMap($map['OpenApiParameters']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SlsParameters'])) {
            $model->slsParameters = slsParameters::fromMap($map['SlsParameters']);
        }

        if (isset($map['WebhookParameters'])) {
            $model->webhookParameters = webhookParameters::fromMap($map['WebhookParameters']);
        }

        return $model;
    }
}
