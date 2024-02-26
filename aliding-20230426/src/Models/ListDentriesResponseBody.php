<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\ListDentriesResponseBody\dentries;
use AlibabaCloud\Tea\Model;

class ListDentriesResponseBody extends Model
{
    /**
     * @var dentries[]
     */
    public $dentries;

    /**
     * @example next_token
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example 0FAAEC9C-C6C8-5C87-AF8E-1195889BBXXX
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 0FAAEC9C-C6C8-5C87-AF8E-1195889BBXXX
     *
     * @var string
     */
    public $vendorRequestId;

    /**
     * @example dingtalk
     *
     * @var string
     */
    public $vendorType;
    protected $_name = [
        'dentries'        => 'dentries',
        'nextToken'       => 'nextToken',
        'requestId'       => 'requestId',
        'vendorRequestId' => 'vendorRequestId',
        'vendorType'      => 'vendorType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dentries) {
            $res['dentries'] = [];
            if (null !== $this->dentries && \is_array($this->dentries)) {
                $n = 0;
                foreach ($this->dentries as $item) {
                    $res['dentries'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->vendorRequestId) {
            $res['vendorRequestId'] = $this->vendorRequestId;
        }
        if (null !== $this->vendorType) {
            $res['vendorType'] = $this->vendorType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDentriesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dentries'])) {
            if (!empty($map['dentries'])) {
                $model->dentries = [];
                $n               = 0;
                foreach ($map['dentries'] as $item) {
                    $model->dentries[$n++] = null !== $item ? dentries::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['vendorRequestId'])) {
            $model->vendorRequestId = $map['vendorRequestId'];
        }
        if (isset($map['vendorType'])) {
            $model->vendorType = $map['vendorType'];
        }

        return $model;
    }
}
