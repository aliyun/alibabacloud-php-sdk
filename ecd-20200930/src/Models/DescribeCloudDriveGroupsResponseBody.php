<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeCloudDriveGroupsResponseBody\cloudDriveGroups;

class DescribeCloudDriveGroupsResponseBody extends Model
{
    /**
     * @var cloudDriveGroups[]
     */
    public $cloudDriveGroups;

    /**
     * @var int
     */
    public $count;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'cloudDriveGroups' => 'CloudDriveGroups',
        'count' => 'Count',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (\is_array($this->cloudDriveGroups)) {
            Model::validateArray($this->cloudDriveGroups);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cloudDriveGroups) {
            if (\is_array($this->cloudDriveGroups)) {
                $res['CloudDriveGroups'] = [];
                $n1 = 0;
                foreach ($this->cloudDriveGroups as $item1) {
                    $res['CloudDriveGroups'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['CloudDriveGroups'])) {
            if (!empty($map['CloudDriveGroups'])) {
                $model->cloudDriveGroups = [];
                $n1 = 0;
                foreach ($map['CloudDriveGroups'] as $item1) {
                    $model->cloudDriveGroups[$n1++] = cloudDriveGroups::fromMap($item1);
                }
            }
        }

        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
