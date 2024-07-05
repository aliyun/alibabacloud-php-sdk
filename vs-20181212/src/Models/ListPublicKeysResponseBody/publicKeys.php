<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\ListPublicKeysResponseBody;

use AlibabaCloud\Tea\Model;

class publicKeys extends Model
{
    /**
     * @example verify_30d89ccb0905c8c7882c1d14a991954b
     *
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $description;

    /**
     * @example mygroup
     *
     * @var string
     */
    public $keyGroup;

    /**
     * @example mykey
     *
     * @var string
     */
    public $keyName;

    /**
     * @example 2024-06-11T14:26:48+08:00
     *
     * @var string
     */
    public $uploadTime;
    protected $_name = [
        'content'     => 'Content',
        'description' => 'Description',
        'keyGroup'    => 'KeyGroup',
        'keyName'     => 'KeyName',
        'uploadTime'  => 'UploadTime',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->uploadTime) {
            $res['UploadTime'] = $this->uploadTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return publicKeys
     */
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
        if (isset($map['UploadTime'])) {
            $model->uploadTime = $map['UploadTime'];
        }

        return $model;
    }
}
