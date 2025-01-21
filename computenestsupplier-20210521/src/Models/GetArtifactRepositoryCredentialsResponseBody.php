<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetArtifactRepositoryCredentialsResponseBody\availableResources;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetArtifactRepositoryCredentialsResponseBody\credentials;

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
     * @var string
     */
    public $expireDate;
    /**
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
        if (\is_array($this->availableResources)) {
            Model::validateArray($this->availableResources);
        }
        if (null !== $this->credentials) {
            $this->credentials->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->availableResources) {
            if (\is_array($this->availableResources)) {
                $res['AvailableResources'] = [];
                $n1                        = 0;
                foreach ($this->availableResources as $item1) {
                    $res['AvailableResources'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->credentials) {
            $res['Credentials'] = null !== $this->credentials ? $this->credentials->toArray($noStream) : $this->credentials;
        }

        if (null !== $this->expireDate) {
            $res['ExpireDate'] = $this->expireDate;
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
        if (isset($map['AvailableResources'])) {
            if (!empty($map['AvailableResources'])) {
                $model->availableResources = [];
                $n1                        = 0;
                foreach ($map['AvailableResources'] as $item1) {
                    $model->availableResources[$n1++] = availableResources::fromMap($item1);
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
