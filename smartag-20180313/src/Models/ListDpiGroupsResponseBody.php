<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\SDK\Smartag\V20180313\Models\ListDpiGroupsResponseBody\dpiGroup;
use AlibabaCloud\Tea\Model;

class ListDpiGroupsResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var dpiGroup[]
     */
    public $dpiGroup;
    protected $_name = [
        'totalCount' => 'TotalCount',
        'nextToken'  => 'NextToken',
        'requestId'  => 'RequestId',
        'dpiGroup'   => 'DpiGroup',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->dpiGroup) {
            $res['DpiGroup'] = [];
            if (null !== $this->dpiGroup && \is_array($this->dpiGroup)) {
                $n = 0;
                foreach ($this->dpiGroup as $item) {
                    $res['DpiGroup'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDpiGroupsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DpiGroup'])) {
            if (!empty($map['DpiGroup'])) {
                $model->dpiGroup = [];
                $n               = 0;
                foreach ($map['DpiGroup'] as $item) {
                    $model->dpiGroup[$n++] = null !== $item ? dpiGroup::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
