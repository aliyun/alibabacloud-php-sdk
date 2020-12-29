<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class CreateAlertContactRequest extends Model
{
    /**
     * @var string
     */
    public $contactName;

    /**
     * @var string
     */
    public $phoneNum;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $dingRobotWebhookUrl;

    /**
     * @var bool
     */
    public $systemNoc;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $proxyUserId;
    protected $_name = [
        'contactName'         => 'ContactName',
        'phoneNum'            => 'PhoneNum',
        'email'               => 'Email',
        'dingRobotWebhookUrl' => 'DingRobotWebhookUrl',
        'systemNoc'           => 'SystemNoc',
        'regionId'            => 'RegionId',
        'proxyUserId'         => 'ProxyUserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactName) {
            $res['ContactName'] = $this->contactName;
        }
        if (null !== $this->phoneNum) {
            $res['PhoneNum'] = $this->phoneNum;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->dingRobotWebhookUrl) {
            $res['DingRobotWebhookUrl'] = $this->dingRobotWebhookUrl;
        }
        if (null !== $this->systemNoc) {
            $res['SystemNoc'] = $this->systemNoc;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->proxyUserId) {
            $res['ProxyUserId'] = $this->proxyUserId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAlertContactRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactName'])) {
            $model->contactName = $map['ContactName'];
        }
        if (isset($map['PhoneNum'])) {
            $model->phoneNum = $map['PhoneNum'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['DingRobotWebhookUrl'])) {
            $model->dingRobotWebhookUrl = $map['DingRobotWebhookUrl'];
        }
        if (isset($map['SystemNoc'])) {
            $model->systemNoc = $map['SystemNoc'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ProxyUserId'])) {
            $model->proxyUserId = $map['ProxyUserId'];
        }

        return $model;
    }
}
