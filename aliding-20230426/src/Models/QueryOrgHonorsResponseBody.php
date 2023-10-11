<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryOrgHonorsResponseBody\openHonors;
use AlibabaCloud\Tea\Model;

class QueryOrgHonorsResponseBody extends Model
{
    /**
     * @example 15
     *
     * @var string
     */
    public $nextToken;

    /**
     * @var openHonors[]
     */
    public $openHonors;

    /**
     * @description requestId
     *
     * @example 0FAAEC9C-C6C8-5C87-AF8E-1195889BBXXX
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'nextToken'  => 'nextToken',
        'openHonors' => 'openHonors',
        'requestId'  => 'requestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }
        if (null !== $this->openHonors) {
            $res['openHonors'] = [];
            if (null !== $this->openHonors && \is_array($this->openHonors)) {
                $n = 0;
                foreach ($this->openHonors as $item) {
                    $res['openHonors'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryOrgHonorsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }
        if (isset($map['openHonors'])) {
            if (!empty($map['openHonors'])) {
                $model->openHonors = [];
                $n                 = 0;
                foreach ($map['openHonors'] as $item) {
                    $model->openHonors[$n++] = null !== $item ? openHonors::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
