<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengapm\V20220214\Models;

use AlibabaCloud\Tea\Model;

class GetSymUploadParamRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 1.0.3
     *
     * @var string
     */
    public $appVersion;

    /**
     * @description This parameter is required.
     *
     * @example 5fb6001a73749c24fd9cb356
     *
     * @var string
     */
    public $dataSourceId;

    /**
     * @description This parameter is required.
     *
     * @example symbol.zip
     *
     * @var string
     */
    public $fileName;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $fileType;

    /**
     * @example my-flutter-app
     *
     * @var string
     */
    public $flutterName;
    protected $_name = [
        'appVersion'   => 'appVersion',
        'dataSourceId' => 'dataSourceId',
        'fileName'     => 'fileName',
        'fileType'     => 'fileType',
        'flutterName'  => 'flutterName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appVersion) {
            $res['appVersion'] = $this->appVersion;
        }
        if (null !== $this->dataSourceId) {
            $res['dataSourceId'] = $this->dataSourceId;
        }
        if (null !== $this->fileName) {
            $res['fileName'] = $this->fileName;
        }
        if (null !== $this->fileType) {
            $res['fileType'] = $this->fileType;
        }
        if (null !== $this->flutterName) {
            $res['flutterName'] = $this->flutterName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSymUploadParamRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['appVersion'])) {
            $model->appVersion = $map['appVersion'];
        }
        if (isset($map['dataSourceId'])) {
            $model->dataSourceId = $map['dataSourceId'];
        }
        if (isset($map['fileName'])) {
            $model->fileName = $map['fileName'];
        }
        if (isset($map['fileType'])) {
            $model->fileType = $map['fileType'];
        }
        if (isset($map['flutterName'])) {
            $model->flutterName = $map['flutterName'];
        }

        return $model;
    }
}
