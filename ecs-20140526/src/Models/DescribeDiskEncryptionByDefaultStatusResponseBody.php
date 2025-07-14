<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class DescribeDiskEncryptionByDefaultStatusResponseBody extends Model
{
    /**
     * @description Indicates whether account-level default encryption of EBS resources is enabled in the region. Valid values:
     *
     *   true
     *   false
     *
     * Default value: false.
     *
     * @example false
     *
     * @var bool
     */
    public $encrypted;

    /**
     * @description The request ID.
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'encrypted' => 'Encrypted',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->encrypted) {
            $res['Encrypted'] = $this->encrypted;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDiskEncryptionByDefaultStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Encrypted'])) {
            $model->encrypted = $map['Encrypted'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
