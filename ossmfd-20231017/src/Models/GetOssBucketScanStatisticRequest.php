<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OssMfd\V20231017\Models;

use AlibabaCloud\Dara\Model;

class GetOssBucketScanStatisticRequest extends Model
{
    /**
     * @var string[]
     */
    public $bucketNameList;
    protected $_name = [
        'bucketNameList' => 'BucketNameList',
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
                $n1 = 0;
                foreach ($this->bucketNameList as $item1) {
                    $res['BucketNameList'][$n1] = $item1;
                    ++$n1;
                }
            }
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
                $n1 = 0;
                foreach ($map['BucketNameList'] as $item1) {
                    $model->bucketNameList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
