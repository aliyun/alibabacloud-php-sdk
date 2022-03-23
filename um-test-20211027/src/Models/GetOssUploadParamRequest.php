<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umtest\V20211027\Models;

use AlibabaCloud\Tea\Model;

class GetOssUploadParamRequest extends Model
{
    /**
     * @description App版本号
     *
     * @var string
     */
    public $appVersion;

    /**
     * @description 数据源id（appKey)
     *
     * @var string
     */
    public $dataSourceId;

    /**
     * @description 文件名称，后缀只允许为txt,so,sym,zip,gz
     *
     * @var string
     */
    public $fileName;

    /**
     * @description 文件类型(1 mapping文件；2 so文件；3 dSYM文件压缩包)
     *
     * @var int
     */
    public $fileType;
    protected $_name = [
        'appVersion'   => 'appVersion',
        'dataSourceId' => 'dataSourceId',
        'fileName'     => 'fileName',
        'fileType'     => 'fileType',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetOssUploadParamRequest
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

        return $model;
    }
}
