<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class UploadedHoneyPotFileRequest extends Model
{
    /**
     * @var string
     */
    public $fileKey;
    /**
     * @var string
     */
    public $fileName;
    /**
     * @var string
     */
    public $fileType;
    /**
     * @var string
     */
    public $honeypotImageName;
    /**
     * @var string
     */
    public $lang;
    /**
     * @var string
     */
    public $nodeId;
    /**
     * @var string
     */
    public $templateExtra;
    protected $_name = [
        'fileKey'           => 'FileKey',
        'fileName'          => 'FileName',
        'fileType'          => 'FileType',
        'honeypotImageName' => 'HoneypotImageName',
        'lang'              => 'Lang',
        'nodeId'            => 'NodeId',
        'templateExtra'     => 'TemplateExtra',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileKey) {
            $res['FileKey'] = $this->fileKey;
        }

        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        if (null !== $this->fileType) {
            $res['FileType'] = $this->fileType;
        }

        if (null !== $this->honeypotImageName) {
            $res['HoneypotImageName'] = $this->honeypotImageName;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        if (null !== $this->templateExtra) {
            $res['TemplateExtra'] = $this->templateExtra;
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
        if (isset($map['FileKey'])) {
            $model->fileKey = $map['FileKey'];
        }

        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        if (isset($map['FileType'])) {
            $model->fileType = $map['FileType'];
        }

        if (isset($map['HoneypotImageName'])) {
            $model->honeypotImageName = $map['HoneypotImageName'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        if (isset($map['TemplateExtra'])) {
            $model->templateExtra = $map['TemplateExtra'];
        }

        return $model;
    }
}
