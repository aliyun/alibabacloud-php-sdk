<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\ListTransferFilesResponseBody;

use AlibabaCloud\Tea\Model;

class files extends Model
{
    /**
     * @example https://app-center-icon-pre-hangzhou.oss-cn-hangzhou.aliyuncs.com/tenant****
     *
     * @var string
     */
    public $iconUrl;

    /**
     * @example trf-a213msf****
     *
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $ossFileName;

    /**
     * @example transfer/1244234/****
     *
     * @var string
     */
    public $ossFilePath;

    /**
     * @example 10853079
     *
     * @var string
     */
    public $size;

    /**
     * @example DELETED
     *
     * @var string
     */
    public $status;

    /**
     * @example txt
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'iconUrl' => 'IconUrl',
        'id' => 'Id',
        'name' => 'Name',
        'ossFileName' => 'OssFileName',
        'ossFilePath' => 'OssFilePath',
        'size' => 'Size',
        'status' => 'Status',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->iconUrl) {
            $res['IconUrl'] = $this->iconUrl;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ossFileName) {
            $res['OssFileName'] = $this->ossFileName;
        }
        if (null !== $this->ossFilePath) {
            $res['OssFilePath'] = $this->ossFilePath;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return files
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IconUrl'])) {
            $model->iconUrl = $map['IconUrl'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OssFileName'])) {
            $model->ossFileName = $map['OssFileName'];
        }
        if (isset($map['OssFilePath'])) {
            $model->ossFilePath = $map['OssFilePath'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
