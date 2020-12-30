<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListMediasResponseBody\medias\list_;

use AlibabaCloud\Tea\Model;

class media extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $filePath;

    /**
     * @var string
     */
    public $instance;

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
    public $name;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $ossFileName;
    protected $_name = [
        'status'      => 'Status',
        'type'        => 'Type',
        'filePath'    => 'FilePath',
        'instance'    => 'Instance',
        'description' => 'Description',
        'fileName'    => 'FileName',
        'name'        => 'Name',
        'content'     => 'Content',
        'ossFileName' => 'OssFileName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->filePath) {
            $res['FilePath'] = $this->filePath;
        }
        if (null !== $this->instance) {
            $res['Instance'] = $this->instance;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->ossFileName) {
            $res['OssFileName'] = $this->ossFileName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return media
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['FilePath'])) {
            $model->filePath = $map['FilePath'];
        }
        if (isset($map['Instance'])) {
            $model->instance = $map['Instance'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['OssFileName'])) {
            $model->ossFileName = $map['OssFileName'];
        }

        return $model;
    }
}
