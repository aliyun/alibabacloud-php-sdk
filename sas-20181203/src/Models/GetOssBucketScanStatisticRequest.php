<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class GetOssBucketScanStatisticRequest extends Model
{
    /**
     * @var string[]
     */
    public $bucketNameList;
    /**
     * @var string
     */
    public $source;
    protected $_name = [
        'bucketNameList' => 'BucketNameList',
        'source'         => 'Source',
    ];

    public function validate()
    {
        if (\is_array($this->bucketNameList)) {
            Model::validateArray($this->bucketNameList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bucketNameList) {
            if (\is_array($this->bucketNameList)) {
                $res['BucketNameList'] = [];
                $n1                    = 0;
                foreach ($this->bucketNameList as $item1) {
                    $res['BucketNameList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
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
        if (isset($map['BucketNameList'])) {
            if (!empty($map['BucketNameList'])) {
                $model->bucketNameList = [];
                $n1                    = 0;
                foreach ($map['BucketNameList'] as $item1) {
                    $model->bucketNameList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        return $model;
    }
}
