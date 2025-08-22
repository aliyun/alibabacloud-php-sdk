<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;

class CreateAlertContactRequest extends Model
{
    /**
     * @var string
     */
    public $contactName;

    /**
     * @var string
     */
    public $dingRobotWebhookUrl;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $phoneNum;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var bool
     */
    public $systemNoc;
    protected $_name = [
        'contactName' => 'ContactName',
        'dingRobotWebhookUrl' => 'DingRobotWebhookUrl',
        'email' => 'Email',
        'phoneNum' => 'PhoneNum',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'systemNoc' => 'SystemNoc',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contactName) {
            $res['ContactName'] = $this->contactName;
        }

        if (null !== $this->dingRobotWebhookUrl) {
            $res['DingRobotWebhookUrl'] = $this->dingRobotWebhookUrl;
        }

        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }

        if (null !== $this->phoneNum) {
            $res['PhoneNum'] = $this->phoneNum;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->systemNoc) {
            $res['SystemNoc'] = $this->systemNoc;
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
        if (isset($map['ContactName'])) {
            $model->contactName = $map['ContactName'];
        }

        if (isset($map['DingRobotWebhookUrl'])) {
            $model->dingRobotWebhookUrl = $map['DingRobotWebhookUrl'];
        }

        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }

        if (isset($map['PhoneNum'])) {
            $model->phoneNum = $map['PhoneNum'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['SystemNoc'])) {
            $model->systemNoc = $map['SystemNoc'];
        }

        return $model;
    }
}
