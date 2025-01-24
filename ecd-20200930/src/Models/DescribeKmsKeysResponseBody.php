<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeKmsKeysResponseBody\keys;

class DescribeKmsKeysResponseBody extends Model
{
    /**
     * @var string
     */
    public $authorizeStatus;
    /**
     * @var keys[]
     */
    public $keys;
    /**
     * @var string
     */
    public $kmsServiceStatus;
    /**
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
        if (\is_array($this->keys)) {
            Model::validateArray($this->keys);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorizeStatus) {
            $res['AuthorizeStatus'] = $this->authorizeStatus;
        }

        if (null !== $this->keys) {
            if (\is_array($this->keys)) {
                $res['Keys'] = [];
                $n1          = 0;
                foreach ($this->keys as $item1) {
                    $res['Keys'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthorizeStatus'])) {
            $model->authorizeStatus = $map['AuthorizeStatus'];
        }

        if (isset($map['Keys'])) {
            if (!empty($map['Keys'])) {
                $model->keys = [];
                $n1          = 0;
                foreach ($map['Keys'] as $item1) {
                    $model->keys[$n1++] = keys::fromMap($item1);
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
