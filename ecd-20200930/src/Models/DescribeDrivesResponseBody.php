<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDrivesResponseBody\drives;
use AlibabaCloud\Tea\Model;

class DescribeDrivesResponseBody extends Model
{
    /**
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @example 2
     *
     * @var int
     */
    public $count;

    /**
     * @var drives[]
     */
    public $drives;

    /**
     * @example successful
     *
     * @var string
     */
    public $message;

    /**
     * @example AAAA****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example B7AA****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code' => 'Code',
        'count' => 'Count',
        'drives' => 'Drives',
        'message' => 'Message',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'success' => 'Success',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->drives) {
            $res['Drives'] = [];
            if (null !== $this->drives && \is_array($this->drives)) {
                $n = 0;
                foreach ($this->drives as $item) {
                    $res['Drives'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
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

    /**
     * @param array $map
     *
     * @return DescribeDrivesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Drives'])) {
            if (!empty($map['Drives'])) {
                $model->drives = [];
                $n = 0;
                foreach ($map['Drives'] as $item) {
                    $model->drives[$n++] = null !== $item ? drives::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
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
