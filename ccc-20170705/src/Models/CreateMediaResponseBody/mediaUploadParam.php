<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\CreateMediaResponseBody;

use AlibabaCloud\Dara\Model;

class mediaUploadParam extends Model
{
    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $instance;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $ossFileName;

    /**
     * @var string
     */
    public $ossFilePath;
    protected $_name = [
        'fileName' => 'FileName',
        'id' => 'Id',
        'instance' => 'Instance',
        'name' => 'Name',
        'ossFileName' => 'OssFileName',
        'ossFilePath' => 'OssFilePath',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->instance) {
            $res['Instance'] = $this->instance;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Instance'])) {
            $model->instance = $map['Instance'];
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

        return $model;
    }
}
