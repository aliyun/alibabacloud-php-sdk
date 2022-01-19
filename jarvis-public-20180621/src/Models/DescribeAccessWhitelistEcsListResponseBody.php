<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Jarvispublic\V20180621\Models;

use AlibabaCloud\SDK\Jarvispublic\V20180621\Models\DescribeAccessWhitelistEcsListResponseBody\ecsList;
use AlibabaCloud\Tea\Model;

class DescribeAccessWhitelistEcsListResponseBody extends Model
{
    /**
     * @var ecsList[]
     */
    public $ecsList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $module;
    protected $_name = [
        'ecsList'    => 'EcsList',
        'requestId'  => 'RequestId',
        'totalCount' => 'TotalCount',
        'module'     => 'module',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ecsList) {
            $res['EcsList'] = [];
            if (null !== $this->ecsList && \is_array($this->ecsList)) {
                $n = 0;
                foreach ($this->ecsList as $item) {
                    $res['EcsList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->module) {
            $res['module'] = $this->module;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAccessWhitelistEcsListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EcsList'])) {
            if (!empty($map['EcsList'])) {
                $model->ecsList = [];
                $n              = 0;
                foreach ($map['EcsList'] as $item) {
                    $model->ecsList[$n++] = null !== $item ? ecsList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['module'])) {
            $model->module = $map['module'];
        }

        return $model;
    }
}
