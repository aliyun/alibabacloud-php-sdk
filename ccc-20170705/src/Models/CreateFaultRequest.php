<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\Tea\Model;

class CreateFaultRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $agentId;

    /**
     * @var string
     */
    public $connectId;

    /**
     * @var string
     */
    public $agentOssFileName;

    /**
     * @var string
     */
    public $agentFilePath;

    /**
     * @var string
     */
    public $customOssFileName;

    /**
     * @var string
     */
    public $customFilePath;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $clientIp;

    /**
     * @var string
     */
    public $clientPort;

    /**
     * @var string
     */
    public $operatingSystemVersion;

    /**
     * @var string
     */
    public $browserVersion;

    /**
     * @var string
     */
    public $microphoneList;

    /**
     * @var string
     */
    public $microphoneEquipment;

    /**
     * @var string
     */
    public $speakerList;

    /**
     * @var string
     */
    public $speakerEquipment;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $serviceIp;

    /**
     * @var string
     */
    public $servicePort;
    protected $_name = [
        'instanceId'             => 'InstanceId',
        'agentId'                => 'AgentId',
        'connectId'              => 'ConnectId',
        'agentOssFileName'       => 'AgentOssFileName',
        'agentFilePath'          => 'AgentFilePath',
        'customOssFileName'      => 'CustomOssFileName',
        'customFilePath'         => 'CustomFilePath',
        'description'            => 'Description',
        'clientIp'               => 'ClientIp',
        'clientPort'             => 'ClientPort',
        'operatingSystemVersion' => 'OperatingSystemVersion',
        'browserVersion'         => 'BrowserVersion',
        'microphoneList'         => 'MicrophoneList',
        'microphoneEquipment'    => 'MicrophoneEquipment',
        'speakerList'            => 'SpeakerList',
        'speakerEquipment'       => 'SpeakerEquipment',
        'startTime'              => 'StartTime',
        'endTime'                => 'EndTime',
        'serviceIp'              => 'ServiceIp',
        'servicePort'            => 'ServicePort',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }
        if (null !== $this->connectId) {
            $res['ConnectId'] = $this->connectId;
        }
        if (null !== $this->agentOssFileName) {
            $res['AgentOssFileName'] = $this->agentOssFileName;
        }
        if (null !== $this->agentFilePath) {
            $res['AgentFilePath'] = $this->agentFilePath;
        }
        if (null !== $this->customOssFileName) {
            $res['CustomOssFileName'] = $this->customOssFileName;
        }
        if (null !== $this->customFilePath) {
            $res['CustomFilePath'] = $this->customFilePath;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->clientIp) {
            $res['ClientIp'] = $this->clientIp;
        }
        if (null !== $this->clientPort) {
            $res['ClientPort'] = $this->clientPort;
        }
        if (null !== $this->operatingSystemVersion) {
            $res['OperatingSystemVersion'] = $this->operatingSystemVersion;
        }
        if (null !== $this->browserVersion) {
            $res['BrowserVersion'] = $this->browserVersion;
        }
        if (null !== $this->microphoneList) {
            $res['MicrophoneList'] = $this->microphoneList;
        }
        if (null !== $this->microphoneEquipment) {
            $res['MicrophoneEquipment'] = $this->microphoneEquipment;
        }
        if (null !== $this->speakerList) {
            $res['SpeakerList'] = $this->speakerList;
        }
        if (null !== $this->speakerEquipment) {
            $res['SpeakerEquipment'] = $this->speakerEquipment;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->serviceIp) {
            $res['ServiceIp'] = $this->serviceIp;
        }
        if (null !== $this->servicePort) {
            $res['ServicePort'] = $this->servicePort;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFaultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }
        if (isset($map['ConnectId'])) {
            $model->connectId = $map['ConnectId'];
        }
        if (isset($map['AgentOssFileName'])) {
            $model->agentOssFileName = $map['AgentOssFileName'];
        }
        if (isset($map['AgentFilePath'])) {
            $model->agentFilePath = $map['AgentFilePath'];
        }
        if (isset($map['CustomOssFileName'])) {
            $model->customOssFileName = $map['CustomOssFileName'];
        }
        if (isset($map['CustomFilePath'])) {
            $model->customFilePath = $map['CustomFilePath'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ClientIp'])) {
            $model->clientIp = $map['ClientIp'];
        }
        if (isset($map['ClientPort'])) {
            $model->clientPort = $map['ClientPort'];
        }
        if (isset($map['OperatingSystemVersion'])) {
            $model->operatingSystemVersion = $map['OperatingSystemVersion'];
        }
        if (isset($map['BrowserVersion'])) {
            $model->browserVersion = $map['BrowserVersion'];
        }
        if (isset($map['MicrophoneList'])) {
            $model->microphoneList = $map['MicrophoneList'];
        }
        if (isset($map['MicrophoneEquipment'])) {
            $model->microphoneEquipment = $map['MicrophoneEquipment'];
        }
        if (isset($map['SpeakerList'])) {
            $model->speakerList = $map['SpeakerList'];
        }
        if (isset($map['SpeakerEquipment'])) {
            $model->speakerEquipment = $map['SpeakerEquipment'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ServiceIp'])) {
            $model->serviceIp = $map['ServiceIp'];
        }
        if (isset($map['ServicePort'])) {
            $model->servicePort = $map['ServicePort'];
        }

        return $model;
    }
}
