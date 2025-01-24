<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeCloudDriveUsersResponseBody\cloudDriveUsers;

class DescribeCloudDriveUsersResponseBody extends Model
{
    /**
     * @var cloudDriveUsers[]
     */
    public $cloudDriveUsers;
    /**
     * @var string
     */
    public $nextToken;
    /**
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
        if (\is_array($this->cloudDriveUsers)) {
            Model::validateArray($this->cloudDriveUsers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cloudDriveUsers) {
            if (\is_array($this->cloudDriveUsers)) {
                $res['CloudDriveUsers'] = [];
                $n1                     = 0;
                foreach ($this->cloudDriveUsers as $item1) {
                    $res['CloudDriveUsers'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CloudDriveUsers'])) {
            if (!empty($map['CloudDriveUsers'])) {
                $model->cloudDriveUsers = [];
                $n1                     = 0;
                foreach ($map['CloudDriveUsers'] as $item1) {
                    $model->cloudDriveUsers[$n1++] = cloudDriveUsers::fromMap($item1);
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
