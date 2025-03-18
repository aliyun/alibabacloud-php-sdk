<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class PrepareUploadRequest extends Model
{
    /**
     * @description The name of the bucket.
     *
     * This parameter is required.
     *
     * @example test
     *
     * @var string
     */
    public $bucketName;

    /**
     * @description The specified IP address. This parameter is applicable to scenarios where the user IP address is inconsistent with the operation calling IP address, such as the scenario where the server obtains authorization and sends the authorization to the client.
     *
     * @example 180.166.XX.XXX
     *
     * @var string
     */
    public $clientIp;
    protected $_name = [
        'bucketName' => 'BucketName',
        'clientIp' => 'ClientIp',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bucketName) {
            $res['BucketName'] = $this->bucketName;
        }
        if (null !== $this->clientIp) {
            $res['ClientIp'] = $this->clientIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PrepareUploadRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }
        if (isset($map['ClientIp'])) {
            $model->clientIp = $map['ClientIp'];
        }

        return $model;
    }
}
