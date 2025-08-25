<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListSmsMetadataResponseBody\data;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var int
     */
    public $aliyunUid;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $scenario;

    /**
     * @var string
     */
    public $signName;

    /**
     * @var string
     */
    public $smsMetadataId;

    /**
     * @var string
     */
    public $templateCode;
    protected $_name = [
        'aliyunUid' => 'AliyunUid',
        'description' => 'Description',
        'instanceId' => 'InstanceId',
        'name' => 'Name',
        'scenario' => 'Scenario',
        'signName' => 'SignName',
        'smsMetadataId' => 'SmsMetadataId',
        'templateCode' => 'TemplateCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
