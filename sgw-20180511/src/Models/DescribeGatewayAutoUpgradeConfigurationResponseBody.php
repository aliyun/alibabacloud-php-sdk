<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models;

use AlibabaCloud\Tea\Model;

class DescribeGatewayAutoUpgradeConfigurationResponseBody extends Model
{
    /**
     * @var int
     */
    public $autoUpgradeEndHour;

    /**
     * @var int
     */
    public $autoUpgradeStartHour;

    /**
     * @var string
     */
    public $code;

    /**
     * @var bool
     */
    public $isAutoUpgrade;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'autoUpgradeEndHour'   => 'AutoUpgradeEndHour',
        'autoUpgradeStartHour' => 'AutoUpgradeStartHour',
        'code'                 => 'Code',
        'isAutoUpgrade'        => 'IsAutoUpgrade',
        'message'              => 'Message',
        'requestId'            => 'RequestId',
        'success'              => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoUpgradeEndHour) {
            $res['AutoUpgradeEndHour'] = $this->autoUpgradeEndHour;
        }
        if (null !== $this->autoUpgradeStartHour) {
            $res['AutoUpgradeStartHour'] = $this->autoUpgradeStartHour;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->isAutoUpgrade) {
            $res['IsAutoUpgrade'] = $this->isAutoUpgrade;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGatewayAutoUpgradeConfigurationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoUpgradeEndHour'])) {
            $model->autoUpgradeEndHour = $map['AutoUpgradeEndHour'];
        }
        if (isset($map['AutoUpgradeStartHour'])) {
            $model->autoUpgradeStartHour = $map['AutoUpgradeStartHour'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['IsAutoUpgrade'])) {
            $model->isAutoUpgrade = $map['IsAutoUpgrade'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
