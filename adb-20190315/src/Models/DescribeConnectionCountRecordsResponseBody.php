<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeConnectionCountRecordsResponseBody\accessIpRecords;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeConnectionCountRecordsResponseBody\userRecords;

class DescribeConnectionCountRecordsResponseBody extends Model
{
    /**
     * @var accessIpRecords[]
     */
    public $accessIpRecords;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var userRecords[]
     */
    public $userRecords;
    protected $_name = [
        'accessIpRecords' => 'AccessIpRecords',
        'DBClusterId' => 'DBClusterId',
        'requestId' => 'RequestId',
        'userRecords' => 'UserRecords',
    ];

    public function validate()
    {
        if (\is_array($this->accessIpRecords)) {
            Model::validateArray($this->accessIpRecords);
        }
        if (\is_array($this->userRecords)) {
            Model::validateArray($this->userRecords);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessIpRecords) {
            if (\is_array($this->accessIpRecords)) {
                $res['AccessIpRecords'] = [];
                $n1 = 0;
                foreach ($this->accessIpRecords as $item1) {
                    $res['AccessIpRecords'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->userRecords)) {
                $res['UserRecords'] = [];
                $n1 = 0;
                foreach ($this->userRecords as $item1) {
                    $res['UserRecords'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['AccessIpRecords'])) {
            if (!empty($map['AccessIpRecords'])) {
                $model->accessIpRecords = [];
                $n1 = 0;
                foreach ($map['AccessIpRecords'] as $item1) {
                    $model->accessIpRecords[$n1++] = accessIpRecords::fromMap($item1);
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
                $n1 = 0;
                foreach ($map['UserRecords'] as $item1) {
                    $model->userRecords[$n1++] = userRecords::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
