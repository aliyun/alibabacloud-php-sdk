<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

class ListDictInformationRequest extends Model
{
    /**
     * @var string
     */
    public $bucketName;

    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $analyzerType;
    protected $_name = [
        'bucketName'   => 'bucketName',
        'key'          => 'key',
        'analyzerType' => 'analyzerType',
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
        if (null !== $this->key) {
            $res['key'] = $this->key;
        }
        if (null !== $this->analyzerType) {
            $res['analyzerType'] = $this->analyzerType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDictInformationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['bucketName'])) {
            $model->bucketName = $map['bucketName'];
        }
        if (isset($map['key'])) {
            $model->key = $map['key'];
        }
        if (isset($map['analyzerType'])) {
            $model->analyzerType = $map['analyzerType'];
        }

        return $model;
    }
}
