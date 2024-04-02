<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models;

use AlibabaCloud\Tea\Model;

class DescribeOssCallbackSettingResponseBody extends Model
{
    /**
     * @var bool
     */
    public $auditCallback;

    /**
     * @var string
     */
    public $callbackSeed;

    /**
     * @var string
     */
    public $callbackUrl;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $scanCallback;

    /**
     * @var string[]
     */
    public $scanCallbackSuggestions;

    /**
     * @var string[]
     */
    public $serviceModules;
    protected $_name = [
        'auditCallback'           => 'AuditCallback',
        'callbackSeed'            => 'CallbackSeed',
        'callbackUrl'             => 'CallbackUrl',
        'requestId'               => 'RequestId',
        'scanCallback'            => 'ScanCallback',
        'scanCallbackSuggestions' => 'ScanCallbackSuggestions',
        'serviceModules'          => 'ServiceModules',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->auditCallback) {
            $res['AuditCallback'] = $this->auditCallback;
        }
        if (null !== $this->callbackSeed) {
            $res['CallbackSeed'] = $this->callbackSeed;
        }
        if (null !== $this->callbackUrl) {
            $res['CallbackUrl'] = $this->callbackUrl;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->scanCallback) {
            $res['ScanCallback'] = $this->scanCallback;
        }
        if (null !== $this->scanCallbackSuggestions) {
            $res['ScanCallbackSuggestions'] = $this->scanCallbackSuggestions;
        }
        if (null !== $this->serviceModules) {
            $res['ServiceModules'] = $this->serviceModules;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeOssCallbackSettingResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuditCallback'])) {
            $model->auditCallback = $map['AuditCallback'];
        }
        if (isset($map['CallbackSeed'])) {
            $model->callbackSeed = $map['CallbackSeed'];
        }
        if (isset($map['CallbackUrl'])) {
            $model->callbackUrl = $map['CallbackUrl'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ScanCallback'])) {
            $model->scanCallback = $map['ScanCallback'];
        }
        if (isset($map['ScanCallbackSuggestions'])) {
            if (!empty($map['ScanCallbackSuggestions'])) {
                $model->scanCallbackSuggestions = $map['ScanCallbackSuggestions'];
            }
        }
        if (isset($map['ServiceModules'])) {
            if (!empty($map['ServiceModules'])) {
                $model->serviceModules = $map['ServiceModules'];
            }
        }

        return $model;
    }
}
