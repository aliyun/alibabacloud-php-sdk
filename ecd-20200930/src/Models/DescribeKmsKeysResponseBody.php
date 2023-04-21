<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeKmsKeysResponseBody\keys;
use AlibabaCloud\Tea\Model;

class DescribeKmsKeysResponseBody extends Model
{
    /**
     * @description The authorization status.
     *
     * @example authorized
     *
     * @var string
     */
    public $authorizeStatus;

    /**
     * @description Details about the customer master keys (CMKs).
     *
     * @var keys[]
     */
    public $keys;

    /**
     * @description Indicates whether KMS is activated.
     *
     * @example enabled
     *
     * @var string
     */
    public $kmsServiceStatus;

    /**
     * @description The ID of the request.
     *
     * @example 1CBAFFAB-B697-4049-A9B1-67E1FC5F****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'authorizeStatus'  => 'AuthorizeStatus',
        'keys'             => 'Keys',
        'kmsServiceStatus' => 'KmsServiceStatus',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorizeStatus) {
            $res['AuthorizeStatus'] = $this->authorizeStatus;
        }
        if (null !== $this->keys) {
            $res['Keys'] = [];
            if (null !== $this->keys && \is_array($this->keys)) {
                $n = 0;
                foreach ($this->keys as $item) {
                    $res['Keys'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->kmsServiceStatus) {
            $res['KmsServiceStatus'] = $this->kmsServiceStatus;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeKmsKeysResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthorizeStatus'])) {
            $model->authorizeStatus = $map['AuthorizeStatus'];
        }
        if (isset($map['Keys'])) {
            if (!empty($map['Keys'])) {
                $model->keys = [];
                $n           = 0;
                foreach ($map['Keys'] as $item) {
                    $model->keys[$n++] = null !== $item ? keys::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['KmsServiceStatus'])) {
            $model->kmsServiceStatus = $map['KmsServiceStatus'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
