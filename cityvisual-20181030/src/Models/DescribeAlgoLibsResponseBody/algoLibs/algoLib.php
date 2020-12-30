<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cityvisual\V20181030\Models\DescribeAlgoLibsResponseBody\algoLibs;

use AlibabaCloud\Tea\Model;

class algoLib extends Model
{
    /**
     * @var string
     */
    public $ossAccessKeyId;

    /**
     * @var string
     */
    public $capacity;

    /**
     * @var string
     */
    public $algoLibId;

    /**
     * @var string
     */
    public $jsonText;

    /**
     * @var string
     */
    public $algoLibVersion;

    /**
     * @var string
     */
    public $algoLibName;

    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $ossBucket;

    /**
     * @var string
     */
    public $capabilityNames;

    /**
     * @var string
     */
    public $ossPath;

    /**
     * @var string
     */
    public $ossEndpoint;

    /**
     * @var string
     */
    public $uploadTime;
    protected $_name = [
        'ossAccessKeyId'  => 'OssAccessKeyId',
        'capacity'        => 'Capacity',
        'algoLibId'       => 'AlgoLibId',
        'jsonText'        => 'JsonText',
        'algoLibVersion'  => 'AlgoLibVersion',
        'algoLibName'     => 'AlgoLibName',
        'text'            => 'Text',
        'ossBucket'       => 'OssBucket',
        'capabilityNames' => 'CapabilityNames',
        'ossPath'         => 'OssPath',
        'ossEndpoint'     => 'OssEndpoint',
        'uploadTime'      => 'UploadTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ossAccessKeyId) {
            $res['OssAccessKeyId'] = $this->ossAccessKeyId;
        }
        if (null !== $this->capacity) {
            $res['Capacity'] = $this->capacity;
        }
        if (null !== $this->algoLibId) {
            $res['AlgoLibId'] = $this->algoLibId;
        }
        if (null !== $this->jsonText) {
            $res['JsonText'] = $this->jsonText;
        }
        if (null !== $this->algoLibVersion) {
            $res['AlgoLibVersion'] = $this->algoLibVersion;
        }
        if (null !== $this->algoLibName) {
            $res['AlgoLibName'] = $this->algoLibName;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }
        if (null !== $this->ossBucket) {
            $res['OssBucket'] = $this->ossBucket;
        }
        if (null !== $this->capabilityNames) {
            $res['CapabilityNames'] = $this->capabilityNames;
        }
        if (null !== $this->ossPath) {
            $res['OssPath'] = $this->ossPath;
        }
        if (null !== $this->ossEndpoint) {
            $res['OssEndpoint'] = $this->ossEndpoint;
        }
        if (null !== $this->uploadTime) {
            $res['UploadTime'] = $this->uploadTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return algoLib
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OssAccessKeyId'])) {
            $model->ossAccessKeyId = $map['OssAccessKeyId'];
        }
        if (isset($map['Capacity'])) {
            $model->capacity = $map['Capacity'];
        }
        if (isset($map['AlgoLibId'])) {
            $model->algoLibId = $map['AlgoLibId'];
        }
        if (isset($map['JsonText'])) {
            $model->jsonText = $map['JsonText'];
        }
        if (isset($map['AlgoLibVersion'])) {
            $model->algoLibVersion = $map['AlgoLibVersion'];
        }
        if (isset($map['AlgoLibName'])) {
            $model->algoLibName = $map['AlgoLibName'];
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }
        if (isset($map['OssBucket'])) {
            $model->ossBucket = $map['OssBucket'];
        }
        if (isset($map['CapabilityNames'])) {
            $model->capabilityNames = $map['CapabilityNames'];
        }
        if (isset($map['OssPath'])) {
            $model->ossPath = $map['OssPath'];
        }
        if (isset($map['OssEndpoint'])) {
            $model->ossEndpoint = $map['OssEndpoint'];
        }
        if (isset($map['UploadTime'])) {
            $model->uploadTime = $map['UploadTime'];
        }

        return $model;
    }
}
