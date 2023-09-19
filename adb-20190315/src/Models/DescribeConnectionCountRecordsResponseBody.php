<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeConnectionCountRecordsResponseBody\accessIpRecords;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeConnectionCountRecordsResponseBody\userRecords;
use AlibabaCloud\Tea\Model;

class DescribeConnectionCountRecordsResponseBody extends Model
{
    /**
     * @description The queried client IP addresses.
     *
     * @var accessIpRecords[]
     */
    public $accessIpRecords;

    /**
     * @description The cluster ID.
     *
     * @example am-bp1jj9xqft1po****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The request ID.
     *
     * @example 562C7F89-FBE6-4A04-AAAA-7EBC25******
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The queried database accounts.
     *
     * @var userRecords[]
     */
    public $userRecords;
    protected $_name = [
        'accessIpRecords' => 'AccessIpRecords',
        'DBClusterId'     => 'DBClusterId',
        'requestId'       => 'RequestId',
        'userRecords'     => 'UserRecords',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessIpRecords) {
            $res['AccessIpRecords'] = [];
            if (null !== $this->accessIpRecords && \is_array($this->accessIpRecords)) {
                $n = 0;
                foreach ($this->accessIpRecords as $item) {
                    $res['AccessIpRecords'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->userRecords) {
            $res['UserRecords'] = [];
            if (null !== $this->userRecords && \is_array($this->userRecords)) {
                $n = 0;
                foreach ($this->userRecords as $item) {
                    $res['UserRecords'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeConnectionCountRecordsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessIpRecords'])) {
            if (!empty($map['AccessIpRecords'])) {
                $model->accessIpRecords = [];
                $n                      = 0;
                foreach ($map['AccessIpRecords'] as $item) {
                    $model->accessIpRecords[$n++] = null !== $item ? accessIpRecords::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UserRecords'])) {
            if (!empty($map['UserRecords'])) {
                $model->userRecords = [];
                $n                  = 0;
                foreach ($map['UserRecords'] as $item) {
                    $model->userRecords[$n++] = null !== $item ? userRecords::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
