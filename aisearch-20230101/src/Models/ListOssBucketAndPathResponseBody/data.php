<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aisearch\V20230101\Models\ListOssBucketAndPathResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $bucketList;

    /**
     * @var string[]
     */
    public $pathList;
    protected $_name = [
        'bucketList' => 'BucketList',
        'pathList'   => 'PathList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bucketList) {
            $res['BucketList'] = $this->bucketList;
        }
        if (null !== $this->pathList) {
            $res['PathList'] = $this->pathList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BucketList'])) {
            if (!empty($map['BucketList'])) {
                $model->bucketList = $map['BucketList'];
            }
        }
        if (isset($map['PathList'])) {
            if (!empty($map['PathList'])) {
                $model->pathList = $map['PathList'];
            }
        }

        return $model;
    }
}
