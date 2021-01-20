<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleTargetListResponseBody\contactParameters;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleTargetListResponseBody\fcParameters;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleTargetListResponseBody\mnsParameters;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleTargetListResponseBody\slsParameters;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleTargetListResponseBody\webhookParameters;
use AlibabaCloud\Tea\Model;

class DescribeEventRuleTargetListResponseBody extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var contactParameters
     */
    public $contactParameters;

    /**
     * @var slsParameters
     */
    public $slsParameters;

    /**
     * @var webhookParameters
     */
    public $webhookParameters;

    /**
     * @var fcParameters
     */
    public $fcParameters;

    /**
     * @var string
     */
    public $code;

    /**
     * @var mnsParameters
     */
    public $mnsParameters;
    protected $_name = [
        'message'           => 'Message',
        'requestId'         => 'RequestId',
        'contactParameters' => 'ContactParameters',
        'slsParameters'     => 'SlsParameters',
        'webhookParameters' => 'WebhookParameters',
        'fcParameters'      => 'FcParameters',
        'code'              => 'Code',
        'mnsParameters'     => 'MnsParameters',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->contactParameters) {
            $res['ContactParameters'] = null !== $this->contactParameters ? $this->contactParameters->toMap() : null;
        }
        if (null !== $this->slsParameters) {
            $res['SlsParameters'] = null !== $this->slsParameters ? $this->slsParameters->toMap() : null;
        }
        if (null !== $this->webhookParameters) {
            $res['WebhookParameters'] = null !== $this->webhookParameters ? $this->webhookParameters->toMap() : null;
        }
        if (null !== $this->fcParameters) {
            $res['FcParameters'] = null !== $this->fcParameters ? $this->fcParameters->toMap() : null;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->mnsParameters) {
            $res['MnsParameters'] = null !== $this->mnsParameters ? $this->mnsParameters->toMap() : null;
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
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ContactParameters'])) {
            $model->contactParameters = contactParameters::fromMap($map['ContactParameters']);
        }
        if (isset($map['SlsParameters'])) {
            $model->slsParameters = slsParameters::fromMap($map['SlsParameters']);
        }
        if (isset($map['WebhookParameters'])) {
            $model->webhookParameters = webhookParameters::fromMap($map['WebhookParameters']);
        }
        if (isset($map['FcParameters'])) {
            $model->fcParameters = fcParameters::fromMap($map['FcParameters']);
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['MnsParameters'])) {
            $model->mnsParameters = mnsParameters::fromMap($map['MnsParameters']);
        }

        return $model;
    }
}
