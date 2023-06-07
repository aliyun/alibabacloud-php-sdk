<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models;

use AlibabaCloud\Tea\Model;

class AllocatePublicConnectionResponseBody extends Model
{
    /**
     * @example db-38263fa955774501a2ae1bdaed6f****.mysql.rds.aliyuncs.com
     *
     * @var string
     */
    public $publicConnection;

    /**
     * @example 30637AD6-D977-4833-A54C-CC89483E****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'publicConnection' => 'PublicConnection',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->publicConnection) {
            $res['PublicConnection'] = $this->publicConnection;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AllocatePublicConnectionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PublicConnection'])) {
            $model->publicConnection = $map['PublicConnection'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
