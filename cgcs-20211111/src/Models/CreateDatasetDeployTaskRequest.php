<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models;

use AlibabaCloud\Tea\Model;

class CreateDatasetDeployTaskRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $customParam;

    /**
     * @var bool
     */
    public $needUnzip;

    /**
     * @var string
     */
    public $ossBucket;

    /**
     * @var string
     */
    public $ossFilePath;

    /**
     * @var string
     */
    public $ossRegionId;

    /**
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'customParam' => 'CustomParam',
        'needUnzip'   => 'NeedUnzip',
        'ossBucket'   => 'OssBucket',
        'ossFilePath' => 'OssFilePath',
        'ossRegionId' => 'OssRegionId',
        'sourceType'  => 'SourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->customParam) {
            $res['CustomParam'] = $this->customParam;
        }
        if (null !== $this->needUnzip) {
            $res['NeedUnzip'] = $this->needUnzip;
        }
        if (null !== $this->ossBucket) {
            $res['OssBucket'] = $this->ossBucket;
        }
        if (null !== $this->ossFilePath) {
            $res['OssFilePath'] = $this->ossFilePath;
        }
        if (null !== $this->ossRegionId) {
            $res['OssRegionId'] = $this->ossRegionId;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDatasetDeployTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['CustomParam'])) {
            $model->customParam = $map['CustomParam'];
        }
        if (isset($map['NeedUnzip'])) {
            $model->needUnzip = $map['NeedUnzip'];
        }
        if (isset($map['OssBucket'])) {
            $model->ossBucket = $map['OssBucket'];
        }
        if (isset($map['OssFilePath'])) {
            $model->ossFilePath = $map['OssFilePath'];
        }
        if (isset($map['OssRegionId'])) {
            $model->ossRegionId = $map['OssRegionId'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        return $model;
    }
}
