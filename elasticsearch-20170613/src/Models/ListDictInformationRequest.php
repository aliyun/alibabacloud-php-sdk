<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Dara\Model;

class ListDictInformationRequest extends Model
{
    /**
     * @var string
     */
    public $analyzerType;

    /**
     * @var string
     */
    public $bucketName;

    /**
     * @var string
     */
    public $key;
    protected $_name = [
        'analyzerType' => 'analyzerType',
        'bucketName' => 'bucketName',
        'key' => 'key',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
