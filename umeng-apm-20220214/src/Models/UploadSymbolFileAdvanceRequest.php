<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengapm\V20220214\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class UploadSymbolFileAdvanceRequest extends Model
{
    /**
     * @example 1.0.3
     *
     * @var string
     */
    public $appVersion;

    /**
     * @example 5fb6001a73749c24fd9cb356
     *
     * @var string
     */
    public $dataSourceId;

    /**
     * @example symbol.zip
     *
     * @var string
     */
    public $fileName;

    /**
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

    /**
     * @example -
     *
     * @var Stream
     */
    public $ossUrlObject;
    protected $_name = [
        'appVersion'   => 'appVersion',
        'dataSourceId' => 'dataSourceId',
        'fileName'     => 'fileName',
        'fileType'     => 'fileType',
        'flutterName'  => 'flutterName',
        'ossUrlObject' => 'ossUrl',
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
        if (null !== $this->ossUrlObject) {
            $res['ossUrl'] = $this->ossUrlObject;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UploadSymbolFileAdvanceRequest
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
        if (isset($map['ossUrl'])) {
            $model->ossUrlObject = $map['ossUrl'];
        }

        return $model;
    }
}
