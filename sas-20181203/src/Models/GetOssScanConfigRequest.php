<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class GetOssScanConfigRequest extends Model
{
    /**
     * @description The name of the bucket.
     *
     * @example iboxpublic****
     *
     * @var string
     */
    public $bucketName;

    /**
     * @description The policy ID.
     *
     * @example 1
     *
     * @var string
     */
    public $id;
    protected $_name = [
        'bucketName' => 'BucketName',
        'id' => 'Id',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bucketName) {
            $res['BucketName'] = $this->bucketName;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetOssScanConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
