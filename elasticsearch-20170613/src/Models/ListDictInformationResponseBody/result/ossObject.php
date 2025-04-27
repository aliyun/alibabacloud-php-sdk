<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListDictInformationResponseBody\result;

use AlibabaCloud\Dara\Model;

class ossObject extends Model
{
    /**
     * @var string
     */
    public $bucketName;

    /**
     * @var string
     */
    public $etag;

    /**
     * @var string
     */
    public $key;
    protected $_name = [
        'bucketName' => 'bucketName',
        'etag' => 'etag',
        'key' => 'key',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bucketName) {
            $res['bucketName'] = $this->bucketName;
        }

        if (null !== $this->etag) {
            $res['etag'] = $this->etag;
        }

        if (null !== $this->key) {
            $res['key'] = $this->key;
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
        if (isset($map['bucketName'])) {
            $model->bucketName = $map['bucketName'];
        }

        if (isset($map['etag'])) {
            $model->etag = $map['etag'];
        }

        if (isset($map['key'])) {
            $model->key = $map['key'];
        }

        return $model;
    }
}
