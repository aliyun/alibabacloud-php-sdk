<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeFotaPendingDesktopsResponseBody\fotaPendingDesktops;
use AlibabaCloud\Tea\Model;

class DescribeFotaPendingDesktopsResponseBody extends Model
{
    /**
     * @description The response code.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The cloud computers whose images can be and are pending to be updated to the version specified in `TaskUid`.
     *
     * @var fotaPendingDesktops[]
     */
    public $fotaPendingDesktops;

    /**
     * @description The returned message.
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description A pagination token. It can be used in the next request to retrieve a new page of results. If NextToken is empty, no next page exists.
     *
     * @example caeba0bbb2be03f84eb48b699f0a4883
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
        'code'                => 'Code',
        'fotaPendingDesktops' => 'FotaPendingDesktops',
        'message'             => 'Message',
        'nextToken'           => 'NextToken',
        'requestId'           => 'RequestId',
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
        if (null !== $this->fotaPendingDesktops) {
            $res['FotaPendingDesktops'] = [];
            if (null !== $this->fotaPendingDesktops && \is_array($this->fotaPendingDesktops)) {
                $n = 0;
                foreach ($this->fotaPendingDesktops as $item) {
                    $res['FotaPendingDesktops'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeFotaPendingDesktopsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['FotaPendingDesktops'])) {
            if (!empty($map['FotaPendingDesktops'])) {
                $model->fotaPendingDesktops = [];
                $n                          = 0;
                foreach ($map['FotaPendingDesktops'] as $item) {
                    $model->fotaPendingDesktops[$n++] = null !== $item ? fotaPendingDesktops::fromMap($item) : $item;
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
