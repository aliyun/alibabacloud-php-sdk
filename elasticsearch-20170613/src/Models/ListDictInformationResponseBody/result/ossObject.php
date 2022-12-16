<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListDictInformationResponseBody\result;

use AlibabaCloud\Tea\Model;

class ossObject extends Model
{
    /**
     * @example es-osstest*
     *
     * @var string
     */
    public $bucketName;

    /**
     * @example 2ABAB5E70BBF631145647F6BE533****
     *
     * @var string
     */
    public $etag;

    /**
     * @example oss/dict_0*.dic
     *
     * @var string
     */
    public $key;
    protected $_name = [
        'bucketName' => 'bucketName',
        'etag'       => 'etag',
        'key'        => 'key',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return ossObject
     */
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
