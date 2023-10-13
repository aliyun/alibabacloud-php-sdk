<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Selectdb\V20230522\Models;

use AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeSecurityIPListResponseBody\groupItems;
use AlibabaCloud\Tea\Model;

class DescribeSecurityIPListResponseBody extends Model
{
    /**
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @example selectdb-cn-7213cjv****
     *
     * @var string
     */
    public $DBInstanceName;

    /**
     * @var groupItems[]
     */
    public $groupItems;

    /**
     * @example Successful
     *
     * @var string
     */
    public $message;

    /**
     * @example 5CBE044D-4594-525D-AC65-E988553D853E
     *
     * @var string
     */
    public $requestId;

    /**
     * @example True
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'           => 'Code',
        'DBInstanceName' => 'DBInstanceName',
        'groupItems'     => 'GroupItems',
        'message'        => 'Message',
        'requestId'      => 'RequestId',
        'success'        => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }
        if (null !== $this->groupItems) {
            $res['GroupItems'] = [];
            if (null !== $this->groupItems && \is_array($this->groupItems)) {
                $n = 0;
                foreach ($this->groupItems as $item) {
                    $res['GroupItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSecurityIPListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }
        if (isset($map['GroupItems'])) {
            if (!empty($map['GroupItems'])) {
                $model->groupItems = [];
                $n                 = 0;
                foreach ($map['GroupItems'] as $item) {
                    $model->groupItems[$n++] = null !== $item ? groupItems::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
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
