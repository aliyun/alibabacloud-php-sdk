<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListDictInformationResponseBody\result;

use AlibabaCloud\Tea\Model;

class ossObject extends Model
{
    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $bucketName;

    /**
     * @var string
     */
    public $etag;
    protected $_name = [
        'key'        => 'key',
        'bucketName' => 'bucketName',
        'etag'       => 'etag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['key'] = $this->key;
        }
        if (null !== $this->bucketName) {
            $res['bucketName'] = $this->bucketName;
        }
        if (null !== $this->etag) {
            $res['etag'] = $this->etag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ossObject
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['key'])) {
            $model->key = $map['key'];
        }
        if (isset($map['bucketName'])) {
            $model->bucketName = $map['bucketName'];
        }
        if (isset($map['etag'])) {
            $model->etag = $map['etag'];
        }

        return $model;
    }
}
