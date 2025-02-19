<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengapm\V20220214\Models;

use AlibabaCloud\Dara\Model;

class UploadSymbolFileRequest extends Model
{
    /**
     * @var string
     */
    public $appVersion;
    /**
     * @var string
     */
    public $dataSourceId;
    /**
     * @var string
     */
    public $fileName;
    /**
     * @var int
     */
    public $fileType;
    /**
     * @var string
     */
    public $flutterName;
    /**
     * @var string
     */
    public $ossUrl;
    protected $_name = [
        'appVersion'   => 'appVersion',
        'dataSourceId' => 'dataSourceId',
        'fileName'     => 'fileName',
        'fileType'     => 'fileType',
        'flutterName'  => 'flutterName',
        'ossUrl'       => 'ossUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->ossUrl) {
            $res['ossUrl'] = $this->ossUrl;
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
            $model->ossUrl = $map['ossUrl'];
        }

        return $model;
    }
}
