<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\Tea\Model;

class CreateMediaRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $ossFileName;

    /**
     * @var string
     */
    public $ossFilePath;

    /**
     * @var string
     */
    public $uploadResult;
    protected $_name = [
        'instanceId'   => 'InstanceId',
        'name'         => 'Name',
        'description'  => 'Description',
        'fileName'     => 'FileName',
        'type'         => 'Type',
        'content'      => 'Content',
        'ossFileName'  => 'OssFileName',
        'ossFilePath'  => 'OssFilePath',
        'uploadResult' => 'UploadResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->ossFileName) {
            $res['OssFileName'] = $this->ossFileName;
        }
        if (null !== $this->ossFilePath) {
            $res['OssFilePath'] = $this->ossFilePath;
        }
        if (null !== $this->uploadResult) {
            $res['UploadResult'] = $this->uploadResult;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateMediaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['OssFileName'])) {
            $model->ossFileName = $map['OssFileName'];
        }
        if (isset($map['OssFilePath'])) {
            $model->ossFilePath = $map['OssFilePath'];
        }
        if (isset($map['UploadResult'])) {
            $model->uploadResult = $map['UploadResult'];
        }

        return $model;
    }
}
