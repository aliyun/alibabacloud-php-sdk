<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cityvisual\V20181030\Models;

use AlibabaCloud\Tea\Model;

class CreateAlgoLibRequest extends Model
{
    /**
     * @var string
     */
    public $algoLibName;

    /**
     * @var string
     */
    public $algoLibVersion;

    /**
     * @var int
     */
    public $capacity;

    /**
     * @var string
     */
    public $ossEndpoint;

    /**
     * @var string
     */
    public $ossAccessKeyId;

    /**
     * @var string
     */
    public $ossBucket;

    /**
     * @var string
     */
    public $ossPath;

    /**
     * @var string
     */
    public $jsonText;

    /**
     * @var string
     */
    public $capabilityNames;

    /**
     * @var string
     */
    public $ossAccessKeySecret;

    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'algoLibName'        => 'AlgoLibName',
        'algoLibVersion'     => 'AlgoLibVersion',
        'capacity'           => 'Capacity',
        'ossEndpoint'        => 'OssEndpoint',
        'ossAccessKeyId'     => 'OssAccessKeyId',
        'ossBucket'          => 'OssBucket',
        'ossPath'            => 'OssPath',
        'jsonText'           => 'JsonText',
        'capabilityNames'    => 'CapabilityNames',
        'ossAccessKeySecret' => 'OssAccessKeySecret',
        'text'               => 'Text',
        'instanceId'         => 'InstanceId',
        'regionId'           => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->algoLibName) {
            $res['AlgoLibName'] = $this->algoLibName;
        }
        if (null !== $this->algoLibVersion) {
            $res['AlgoLibVersion'] = $this->algoLibVersion;
        }
        if (null !== $this->capacity) {
            $res['Capacity'] = $this->capacity;
        }
        if (null !== $this->ossEndpoint) {
            $res['OssEndpoint'] = $this->ossEndpoint;
        }
        if (null !== $this->ossAccessKeyId) {
            $res['OssAccessKeyId'] = $this->ossAccessKeyId;
        }
        if (null !== $this->ossBucket) {
            $res['OssBucket'] = $this->ossBucket;
        }
        if (null !== $this->ossPath) {
            $res['OssPath'] = $this->ossPath;
        }
        if (null !== $this->jsonText) {
            $res['JsonText'] = $this->jsonText;
        }
        if (null !== $this->capabilityNames) {
            $res['CapabilityNames'] = $this->capabilityNames;
        }
        if (null !== $this->ossAccessKeySecret) {
            $res['OssAccessKeySecret'] = $this->ossAccessKeySecret;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAlgoLibRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlgoLibName'])) {
            $model->algoLibName = $map['AlgoLibName'];
        }
        if (isset($map['AlgoLibVersion'])) {
            $model->algoLibVersion = $map['AlgoLibVersion'];
        }
        if (isset($map['Capacity'])) {
            $model->capacity = $map['Capacity'];
        }
        if (isset($map['OssEndpoint'])) {
            $model->ossEndpoint = $map['OssEndpoint'];
        }
        if (isset($map['OssAccessKeyId'])) {
            $model->ossAccessKeyId = $map['OssAccessKeyId'];
        }
        if (isset($map['OssBucket'])) {
            $model->ossBucket = $map['OssBucket'];
        }
        if (isset($map['OssPath'])) {
            $model->ossPath = $map['OssPath'];
        }
        if (isset($map['JsonText'])) {
            $model->jsonText = $map['JsonText'];
        }
        if (isset($map['CapabilityNames'])) {
            $model->capabilityNames = $map['CapabilityNames'];
        }
        if (isset($map['OssAccessKeySecret'])) {
            $model->ossAccessKeySecret = $map['OssAccessKeySecret'];
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
