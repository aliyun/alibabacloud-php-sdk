<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class UploadAICPublicKeyRequest extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $keyGroup;

    /**
     * @var string
     */
    public $keyName;

    /**
     * @var string
     */
    public $keyType;
    protected $_name = [
        'content' => 'Content',
        'description' => 'Description',
        'keyGroup' => 'KeyGroup',
        'keyName' => 'KeyName',
        'keyType' => 'KeyType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->keyGroup) {
            $res['KeyGroup'] = $this->keyGroup;
        }

        if (null !== $this->keyName) {
            $res['KeyName'] = $this->keyName;
        }

        if (null !== $this->keyType) {
            $res['KeyType'] = $this->keyType;
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
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['KeyGroup'])) {
            $model->keyGroup = $map['KeyGroup'];
        }

        if (isset($map['KeyName'])) {
            $model->keyName = $map['KeyName'];
        }

        if (isset($map['KeyType'])) {
            $model->keyType = $map['KeyType'];
        }

        return $model;
    }
}
