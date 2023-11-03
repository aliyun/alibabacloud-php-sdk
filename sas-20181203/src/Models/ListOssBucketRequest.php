<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ListOssBucketRequest extends Model
{
    /**
     * @example iboxpublic****
     *
     * @var string
     */
    public $bucketName;

    /**
     * @example en
     *
     * @var string
     */
    public $lang;
    protected $_name = [
        'bucketName' => 'BucketName',
        'lang'       => 'Lang',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bucketName) {
            $res['BucketName'] = $this->bucketName;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListOssBucketRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        return $model;
    }
}
