<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListSmsMetadataResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @example 15772400000****
     *
     * @var int
     */
    public $aliyunUid;

    /**
     * @var string
     */
    public $description;

    /**
     * @example ccc-test
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $name;

    /**
     * @example MISSED_CALL_NOTIFICATION
     *
     * @var string
     */
    public $scenario;

    /**
     * @var string
     */
    public $signName;

    /**
     * @example 5ffc1c9a-4d3d-4019-*****-73255fb01d1c
     *
     * @var string
     */
    public $smsMetadataId;

    /**
     * @example SMS_468xxxx298
     *
     * @var string
     */
    public $templateCode;
    protected $_name = [
        'aliyunUid'     => 'AliyunUid',
        'description'   => 'Description',
        'instanceId'    => 'InstanceId',
        'name'          => 'Name',
        'scenario'      => 'Scenario',
        'signName'      => 'SignName',
        'smsMetadataId' => 'SmsMetadataId',
        'templateCode'  => 'TemplateCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunUid) {
            $res['AliyunUid'] = $this->aliyunUid;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->scenario) {
            $res['Scenario'] = $this->scenario;
        }
        if (null !== $this->signName) {
            $res['SignName'] = $this->signName;
        }
        if (null !== $this->smsMetadataId) {
            $res['SmsMetadataId'] = $this->smsMetadataId;
        }
        if (null !== $this->templateCode) {
            $res['TemplateCode'] = $this->templateCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliyunUid'])) {
            $model->aliyunUid = $map['AliyunUid'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Scenario'])) {
            $model->scenario = $map['Scenario'];
        }
        if (isset($map['SignName'])) {
            $model->signName = $map['SignName'];
        }
        if (isset($map['SmsMetadataId'])) {
            $model->smsMetadataId = $map['SmsMetadataId'];
        }
        if (isset($map['TemplateCode'])) {
            $model->templateCode = $map['TemplateCode'];
        }

        return $model;
    }
}
