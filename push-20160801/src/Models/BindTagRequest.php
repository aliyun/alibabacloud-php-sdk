<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models;

use AlibabaCloud\Dara\Model;

class BindTagRequest extends Model
{
    /**
     * @var int
     */
    public $appKey;

    /**
     * @var string
     */
    public $clientKey;

    /**
     * @var string
     */
    public $keyType;

    /**
     * @var string
     */
    public $tagName;
    protected $_name = [
        'appKey' => 'AppKey',
        'clientKey' => 'ClientKey',
        'keyType' => 'KeyType',
        'tagName' => 'TagName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }

        if (null !== $this->clientKey) {
            $res['ClientKey'] = $this->clientKey;
        }

        if (null !== $this->keyType) {
            $res['KeyType'] = $this->keyType;
        }

        if (null !== $this->tagName) {
            $res['TagName'] = $this->tagName;
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
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }

        if (isset($map['ClientKey'])) {
            $model->clientKey = $map['ClientKey'];
        }

        if (isset($map['KeyType'])) {
            $model->keyType = $map['KeyType'];
        }

        if (isset($map['TagName'])) {
            $model->tagName = $map['TagName'];
        }

        return $model;
    }
}
