<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DFS\V20180620\Models;

use AlibabaCloud\SDK\DFS\V20180620\Models\ListAccessRulesResponseBody\accessRules;
use AlibabaCloud\Tea\Model;

class ListAccessRulesResponseBody extends Model
{
    /**
     * @var accessRules[]
     */
    public $accessRules;

    /**
     * @example 55C5FFD6-BF99-41BD-9C66-FFF39189****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'accessRules' => 'AccessRules',
        'requestId'   => 'RequestId',
        'totalCount'  => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessRules) {
            $res['AccessRules'] = [];
            if (null !== $this->accessRules && \is_array($this->accessRules)) {
                $n = 0;
                foreach ($this->accessRules as $item) {
                    $res['AccessRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAccessRulesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessRules'])) {
            if (!empty($map['AccessRules'])) {
                $model->accessRules = [];
                $n                  = 0;
                foreach ($map['AccessRules'] as $item) {
                    $model->accessRules[$n++] = null !== $item ? accessRules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
