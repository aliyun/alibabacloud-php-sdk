<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleTargetListResponseBody\contactParameters;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleTargetListResponseBody\fcParameters;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleTargetListResponseBody\mnsParameters;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleTargetListResponseBody\openApiParameters;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleTargetListResponseBody\slsParameters;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleTargetListResponseBody\webhookParameters;
use AlibabaCloud\Tea\Model;

class DescribeEventRuleTargetListResponseBody extends Model
{
    /**
     * @description The alert notification methods. Valid values:
     *
     * 4: Alert notifications are sent by using DingTalk chatbots and emails.
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description For more information about common request parameters, see [Common parameters](~~199331~~).
     *
     * @var contactParameters
     */
    public $contactParameters;

    /**
     * @var fcParameters
     */
    public $fcParameters;

    /**
     * @description The information about the recipients if alert notifications are sent to the alert contacts of an alert contact group.
     *
     * @example The Request is not authorization.
     *
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
     * @description The ID of the request.
     *
     * @example 87170bc7-e28a-4c93-b9bf-90a1dbe84736
     *
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
        'code'              => 'Code',
        'contactParameters' => 'ContactParameters',
        'fcParameters'      => 'FcParameters',
        'message'           => 'Message',
        'mnsParameters'     => 'MnsParameters',
        'openApiParameters' => 'OpenApiParameters',
        'requestId'         => 'RequestId',
        'slsParameters'     => 'SlsParameters',
        'webhookParameters' => 'WebhookParameters',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->contactParameters) {
            $res['ContactParameters'] = null !== $this->contactParameters ? $this->contactParameters->toMap() : null;
        }
        if (null !== $this->fcParameters) {
            $res['FcParameters'] = null !== $this->fcParameters ? $this->fcParameters->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->mnsParameters) {
            $res['MnsParameters'] = null !== $this->mnsParameters ? $this->mnsParameters->toMap() : null;
        }
        if (null !== $this->openApiParameters) {
            $res['OpenApiParameters'] = null !== $this->openApiParameters ? $this->openApiParameters->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->slsParameters) {
            $res['SlsParameters'] = null !== $this->slsParameters ? $this->slsParameters->toMap() : null;
        }
        if (null !== $this->webhookParameters) {
            $res['WebhookParameters'] = null !== $this->webhookParameters ? $this->webhookParameters->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEventRuleTargetListResponseBody
     */
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
