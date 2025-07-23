<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Tea\Model;

class DescribeCloudResourceStatusRequest extends Model
{
    /**
     * @description The AccessKey secret used to access cloud resources.
     *
     * >  You can call the [ListCloudAccess](https://help.aliyun.com/document_detail/2712219.html) operation to obtain the ID.
     *
     * @example AKID9*******XX
     *
     * @var string
     */
    public $secretId;
    protected $_name = [
        'secretId' => 'SecretId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->secretId) {
            $res['SecretId'] = $this->secretId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCloudResourceStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecretId'])) {
            $model->secretId = $map['SecretId'];
        }

        return $model;
    }
}
