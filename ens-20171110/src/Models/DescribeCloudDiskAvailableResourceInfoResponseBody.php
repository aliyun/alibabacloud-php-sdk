<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeCloudDiskAvailableResourceInfoResponseBody\supportResources;

class DescribeCloudDiskAvailableResourceInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var supportResources
     */
    public $supportResources;
    protected $_name = [
        'requestId' => 'RequestId',
        'supportResources' => 'SupportResources',
    ];

    public function validate()
    {
        if (null !== $this->supportResources) {
            $this->supportResources->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->supportResources) {
            $res['SupportResources'] = null !== $this->supportResources ? $this->supportResources->toArray($noStream) : $this->supportResources;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SupportResources'])) {
            $model->supportResources = supportResources::fromMap($map['SupportResources']);
        }

        return $model;
    }
}
