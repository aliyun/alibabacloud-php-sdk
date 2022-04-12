<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class SwitchAdvancedMonitoringResponseBody extends Model
{
    /**
     * @var bool
     */
    public $advancedMonitoringEnabled;

    /**
     * @var int
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
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
