<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeAIDBClusterTaskAttributeResponseBody;

use AlibabaCloud\Dara\Model;

class customBucketInfo extends Model
{
    /**
     * @var string
     */
    public $customOssBucketName;
    protected $_name = [
        'customOssBucketName' => 'CustomOssBucketName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customOssBucketName) {
            $res['CustomOssBucketName'] = $this->customOssBucketName;
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
        if (isset($map['CustomOssBucketName'])) {
            $model->customOssBucketName = $map['CustomOssBucketName'];
        }

        return $model;
    }
}
