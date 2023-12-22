<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210903\Models;

use AlibabaCloud\SDK\Appstreamcenter\V20210903\Models\ListPublishedAppInfoResponseBody\appModels;
use AlibabaCloud\Tea\Model;

class ListPublishedAppInfoResponseBody extends Model
{
    /**
     * @description appModels
     *
     * @var appModels[]
     */
    public $appModels;

    /**
     * @example 2NVfhLfgy5b3J5iJyoLQ6x4EULMg1hbhgB9NfnvdK9oj5zwxd17j4TuQkZze3RvhEvBinZYjknujF3Q1M
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description Id of the request
     *
     * @example DB70F8FE-63A3-587B-8560-CEC258E8B944
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'appModels' => 'AppModels',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appModels) {
            $res['AppModels'] = [];
            if (null !== $this->appModels && \is_array($this->appModels)) {
                $n = 0;
                foreach ($this->appModels as $item) {
                    $res['AppModels'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListPublishedAppInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppModels'])) {
            if (!empty($map['AppModels'])) {
                $model->appModels = [];
                $n                = 0;
                foreach ($map['AppModels'] as $item) {
                    $model->appModels[$n++] = null !== $item ? appModels::fromMap($item) : $item;
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
