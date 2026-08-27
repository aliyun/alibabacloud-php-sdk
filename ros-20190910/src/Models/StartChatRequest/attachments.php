<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\StartChatRequest;

use AlibabaCloud\Dara\Model;

class attachments extends Model
{
    /**
     * @var string
     */
    public $mimeType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $ossObjectKey;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'mimeType' => 'MimeType',
        'name' => 'Name',
        'ossObjectKey' => 'OssObjectKey',
        'type' => 'Type',
        'url' => 'Url',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mimeType) {
            $res['MimeType'] = $this->mimeType;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->ossObjectKey) {
            $res['OssObjectKey'] = $this->ossObjectKey;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->url) {
            $res['Url'] = $this->url;
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
        if (isset($map['MimeType'])) {
            $model->mimeType = $map['MimeType'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OssObjectKey'])) {
            $model->ossObjectKey = $map['OssObjectKey'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
