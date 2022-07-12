<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeFotaPendingDesktopsResponseBody\fotaPendingDesktops;
use AlibabaCloud\Tea\Model;

class DescribeFotaPendingDesktopsResponseBody extends Model
{
    /**
     * @var fotaPendingDesktops[]
     */
    public $fotaPendingDesktops;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'fotaPendingDesktops' => 'FotaPendingDesktops',
        'nextToken'           => 'NextToken',
        'requestId'           => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fotaPendingDesktops) {
            $res['FotaPendingDesktops'] = [];
            if (null !== $this->fotaPendingDesktops && \is_array($this->fotaPendingDesktops)) {
                $n = 0;
                foreach ($this->fotaPendingDesktops as $item) {
                    $res['FotaPendingDesktops'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeFotaPendingDesktopsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FotaPendingDesktops'])) {
            if (!empty($map['FotaPendingDesktops'])) {
                $model->fotaPendingDesktops = [];
                $n                          = 0;
                foreach ($map['FotaPendingDesktops'] as $item) {
                    $model->fotaPendingDesktops[$n++] = null !== $item ? fotaPendingDesktops::fromMap($item) : $item;
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
