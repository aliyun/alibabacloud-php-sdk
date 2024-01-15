<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeCloudDriveUsersResponseBody\cloudDriveUsers;
use AlibabaCloud\Tea\Model;

class DescribeCloudDriveUsersResponseBody extends Model
{
    /**
     * @var cloudDriveUsers[]
     */
    public $cloudDriveUsers;

    /**
     * @example aGN4YzAxQGNuLWhhbmd6aG91LjExNzU5NTMyNjgzMTQ1****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example F083AAE5-7AA9-53BB-9060-AFFB2C18****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'cloudDriveUsers' => 'CloudDriveUsers',
        'nextToken'       => 'NextToken',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cloudDriveUsers) {
            $res['CloudDriveUsers'] = [];
            if (null !== $this->cloudDriveUsers && \is_array($this->cloudDriveUsers)) {
                $n = 0;
                foreach ($this->cloudDriveUsers as $item) {
                    $res['CloudDriveUsers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCloudDriveUsersResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CloudDriveUsers'])) {
            if (!empty($map['CloudDriveUsers'])) {
                $model->cloudDriveUsers = [];
                $n                      = 0;
                foreach ($map['CloudDriveUsers'] as $item) {
                    $model->cloudDriveUsers[$n++] = null !== $item ? cloudDriveUsers::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
