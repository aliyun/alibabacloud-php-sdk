<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class UploadPublicKeyRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example verify_dffeb6610035dcb77b413a59c3*****
     *
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $description;

    /**
     * @example g-test
     *
     * @var string
     */
    public $keyGroup;

    /**
     * @description This parameter is required.
     *
     * @example mykey-v1.0
     *
     * @var string
     */
    public $keyName;
    protected $_name = [
        'content'     => 'Content',
        'description' => 'Description',
        'keyGroup'    => 'KeyGroup',
        'keyName'     => 'KeyName',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UploadPublicKeyRequest
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

        return $model;
    }
}
