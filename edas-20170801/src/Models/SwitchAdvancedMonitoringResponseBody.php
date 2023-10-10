<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class SwitchAdvancedMonitoringResponseBody extends Model
{
    /**
     * @description Indicates whether the advanced application monitoring feature is enabled. Valid values:
     *
     *   true: The advanced application monitoring feature is enabled.
     *   false: The advanced application monitoring feature is disabled.
     *
     * @example false
     *
     * @var bool
     */
    public $advancedMonitoringEnabled;

    /**
     * @description The HTTP status code that is returned.
     *
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @description The additional information that is returned.
     *
     * @example The advanced monitoring status is disabled already for application which app_id is 9e224bc6-a646-4484-ae31-e617b7e7****
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the request.
     *
     * @example 577AED12-32D8-40B6-991F-17D7A601****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'advancedMonitoringEnabled' => 'AdvancedMonitoringEnabled',
        'code'                      => 'Code',
        'message'                   => 'Message',
        'requestId'                 => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->advancedMonitoringEnabled) {
            $res['AdvancedMonitoringEnabled'] = $this->advancedMonitoringEnabled;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SwitchAdvancedMonitoringResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdvancedMonitoringEnabled'])) {
            $model->advancedMonitoringEnabled = $map['AdvancedMonitoringEnabled'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
