<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetArtifactRepositoryCredentialsResponseBody\availableResources;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetArtifactRepositoryCredentialsResponseBody\credentials;
use AlibabaCloud\Tea\Model;

class GetArtifactRepositoryCredentialsResponseBody extends Model
{
    /**
     * @var availableResources[]
     */
    public $availableResources;

    /**
     * @var credentials
     */
    public $credentials;

    /**
     * @example 1526549792000
     *
     * @var string
     */
    public $expireDate;

    /**
     * @example 94E89857-B994-44B6-9C4F-DBD200E9XXXX
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'availableResources' => 'AvailableResources',
        'credentials'        => 'Credentials',
        'expireDate'         => 'ExpireDate',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->availableResources) {
            $res['AvailableResources'] = [];
            if (null !== $this->availableResources && \is_array($this->availableResources)) {
                $n = 0;
                foreach ($this->availableResources as $item) {
                    $res['AvailableResources'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->credentials) {
            $res['Credentials'] = null !== $this->credentials ? $this->credentials->toMap() : null;
        }
        if (null !== $this->expireDate) {
            $res['ExpireDate'] = $this->expireDate;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetArtifactRepositoryCredentialsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvailableResources'])) {
            if (!empty($map['AvailableResources'])) {
                $model->availableResources = [];
                $n                         = 0;
                foreach ($map['AvailableResources'] as $item) {
                    $model->availableResources[$n++] = null !== $item ? availableResources::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Credentials'])) {
            $model->credentials = credentials::fromMap($map['Credentials']);
        }
        if (isset($map['ExpireDate'])) {
            $model->expireDate = $map['ExpireDate'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
