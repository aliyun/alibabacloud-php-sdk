<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

class ListDictInformationRequest extends Model
{
    /**
     * @example ALIWS
     *
     * @var string
     */
    public $analyzerType;

    /**
     * @description This parameter is required.
     *
     * @example search-cloud-test-cn-****
     *
     * @var string
     */
    public $bucketName;

    /**
     * @description This parameter is required.
     *
     * @example oss/dic_0.dic
     *
     * @var string
     */
    public $key;
    protected $_name = [
        'analyzerType' => 'analyzerType',
        'bucketName'   => 'bucketName',
        'key'          => 'key',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->analyzerType) {
            $res['analyzerType'] = $this->analyzerType;
        }
        if (null !== $this->bucketName) {
            $res['bucketName'] = $this->bucketName;
        }
        if (null !== $this->key) {
            $res['key'] = $this->key;
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
        if (isset($map['analyzerType'])) {
            $model->analyzerType = $map['analyzerType'];
        }
        if (isset($map['bucketName'])) {
            $model->bucketName = $map['bucketName'];
        }
        if (isset($map['key'])) {
            $model->key = $map['key'];
        }

        return $model;
    }
}
