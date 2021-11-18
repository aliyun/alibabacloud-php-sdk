<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\Tea\Model;

class CreateFaultRequest extends Model
{
    /**
     * @var string
     */
    public $agentFilePath;

    /**
     * @var int
     */
    public $agentId;

    /**
     * @var string
     */
    public $agentOssFileName;

    /**
     * @var string
     */
    public $browserVersion;

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
    public $connectId;

    /**
     * @var string
     */
    public $customFilePath;

    /**
     * @var string
     */
    public $customOssFileName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $microphoneEquipment;

    /**
     * @var string
     */
    public $microphoneList;

    /**
     * @var string
     */
    public $operatingSystemVersion;

    /**
     * @var string
     */
    public $serviceIp;

    /**
     * @var string
     */
    public $servicePort;

    /**
     * @var string
     */
    public $speakerEquipment;

    /**
     * @var string
     */
    public $speakerList;

    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'agentFilePath'          => 'AgentFilePath',
        'agentId'                => 'AgentId',
        'agentOssFileName'       => 'AgentOssFileName',
        'browserVersion'         => 'BrowserVersion',
        'clientIp'               => 'ClientIp',
        'clientPort'             => 'ClientPort',
        'connectId'              => 'ConnectId',
        'customFilePath'         => 'CustomFilePath',
        'customOssFileName'      => 'CustomOssFileName',
        'description'            => 'Description',
        'endTime'                => 'EndTime',
        'instanceId'             => 'InstanceId',
        'microphoneEquipment'    => 'MicrophoneEquipment',
        'microphoneList'         => 'MicrophoneList',
        'operatingSystemVersion' => 'OperatingSystemVersion',
        'serviceIp'              => 'ServiceIp',
        'servicePort'            => 'ServicePort',
        'speakerEquipment'       => 'SpeakerEquipment',
        'speakerList'            => 'SpeakerList',
        'startTime'              => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentFilePath) {
            $res['AgentFilePath'] = $this->agentFilePath;
        }
        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }
        if (null !== $this->agentOssFileName) {
            $res['AgentOssFileName'] = $this->agentOssFileName;
        }
        if (null !== $this->browserVersion) {
            $res['BrowserVersion'] = $this->browserVersion;
        }
        if (null !== $this->clientIp) {
            $res['ClientIp'] = $this->clientIp;
        }
        if (null !== $this->clientPort) {
            $res['ClientPort'] = $this->clientPort;
        }
        if (null !== $this->connectId) {
            $res['ConnectId'] = $this->connectId;
        }
        if (null !== $this->customFilePath) {
            $res['CustomFilePath'] = $this->customFilePath;
        }
        if (null !== $this->customOssFileName) {
            $res['CustomOssFileName'] = $this->customOssFileName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->microphoneEquipment) {
            $res['MicrophoneEquipment'] = $this->microphoneEquipment;
        }
        if (null !== $this->microphoneList) {
            $res['MicrophoneList'] = $this->microphoneList;
        }
        if (null !== $this->operatingSystemVersion) {
            $res['OperatingSystemVersion'] = $this->operatingSystemVersion;
        }
        if (null !== $this->serviceIp) {
            $res['ServiceIp'] = $this->serviceIp;
        }
        if (null !== $this->servicePort) {
            $res['ServicePort'] = $this->servicePort;
        }
        if (null !== $this->speakerEquipment) {
            $res['SpeakerEquipment'] = $this->speakerEquipment;
        }
        if (null !== $this->speakerList) {
            $res['SpeakerList'] = $this->speakerList;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['AgentFilePath'])) {
            $model->agentFilePath = $map['AgentFilePath'];
        }
        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }
        if (isset($map['AgentOssFileName'])) {
            $model->agentOssFileName = $map['AgentOssFileName'];
        }
        if (isset($map['BrowserVersion'])) {
            $model->browserVersion = $map['BrowserVersion'];
        }
        if (isset($map['ClientIp'])) {
            $model->clientIp = $map['ClientIp'];
        }
        if (isset($map['ClientPort'])) {
            $model->clientPort = $map['ClientPort'];
        }
        if (isset($map['ConnectId'])) {
            $model->connectId = $map['ConnectId'];
        }
        if (isset($map['CustomFilePath'])) {
            $model->customFilePath = $map['CustomFilePath'];
        }
        if (isset($map['CustomOssFileName'])) {
            $model->customOssFileName = $map['CustomOssFileName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['MicrophoneEquipment'])) {
            $model->microphoneEquipment = $map['MicrophoneEquipment'];
        }
        if (isset($map['MicrophoneList'])) {
            $model->microphoneList = $map['MicrophoneList'];
        }
        if (isset($map['OperatingSystemVersion'])) {
            $model->operatingSystemVersion = $map['OperatingSystemVersion'];
        }
        if (isset($map['ServiceIp'])) {
            $model->serviceIp = $map['ServiceIp'];
        }
        if (isset($map['ServicePort'])) {
            $model->servicePort = $map['ServicePort'];
        }
        if (isset($map['SpeakerEquipment'])) {
            $model->speakerEquipment = $map['SpeakerEquipment'];
        }
        if (isset($map['SpeakerList'])) {
            $model->speakerList = $map['SpeakerList'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
