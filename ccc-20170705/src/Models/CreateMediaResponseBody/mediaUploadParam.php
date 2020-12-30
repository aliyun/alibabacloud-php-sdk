<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\CreateMediaResponseBody;

use AlibabaCloud\Tea\Model;

class mediaUploadParam extends Model
{
    /**
     * @var string
     */
    public $instance;

    /**
     * @var string
     */
    public $ossFilePath;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $ossFileName;
    protected $_name = [
        'instance'    => 'Instance',
        'ossFilePath' => 'OssFilePath',
        'fileName'    => 'FileName',
        'name'        => 'Name',
        'id'          => 'Id',
        'ossFileName' => 'OssFileName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instance) {
            $res['Instance'] = $this->instance;
        }
        if (null !== $this->ossFilePath) {
            $res['OssFilePath'] = $this->ossFilePath;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->ossFileName) {
            $res['OssFileName'] = $this->ossFileName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mediaUploadParam
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Instance'])) {
            $model->instance = $map['Instance'];
        }
        if (isset($map['OssFilePath'])) {
            $model->ossFilePath = $map['OssFilePath'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['OssFileName'])) {
            $model->ossFileName = $map['OssFileName'];
        }

        return $model;
    }
}
