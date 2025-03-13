<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeFotaTasksResponseBody\fotaTasks;
use AlibabaCloud\Tea\Model;

class DescribeFotaTasksResponseBody extends Model
{
    /**
     * @description The returned message. If the request was successful, a `success` is returned. If the request failed, an error message is returned.
     *
     * @example success
     *
     * @var string
     */
    public $code;

    /**
     * @description Details about the image update task.
     *
     * @var fotaTasks[]
     */
    public $fotaTasks;

    /**
     * @description The returned error message. This parameter is not returned if the Code value is a `success` message.
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description A pagination token. It can be used in the next request to retrieve a new page of results. If NextToken is empty, no next page exists.
     *
     * @example AAAAAV3MpHK1AP0pfERHZN5pu6nmB7qrRFJ8vmttjxPL****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The request ID.
     *
     * @example 1CBAFFAB-B697-4049-A9B1-67E1FC5F****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'      => 'Code',
        'fotaTasks' => 'FotaTasks',
        'message'   => 'Message',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
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
        if (null !== $this->fotaTasks) {
            $res['FotaTasks'] = [];
            if (null !== $this->fotaTasks && \is_array($this->fotaTasks)) {
                $n = 0;
                foreach ($this->fotaTasks as $item) {
                    $res['FotaTasks'][$n++] = null !== $item ? $item->toMap() : $item;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFotaTasksResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['FotaTasks'])) {
            if (!empty($map['FotaTasks'])) {
                $model->fotaTasks = [];
                $n                = 0;
                foreach ($map['FotaTasks'] as $item) {
                    $model->fotaTasks[$n++] = null !== $item ? fotaTasks::fromMap($item) : $item;
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

        return $model;
    }
}
