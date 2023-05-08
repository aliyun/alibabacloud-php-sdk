<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeRestorePlansResponseBody\pageInfo;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeRestorePlansResponseBody\restorePlans;
use AlibabaCloud\Tea\Model;

class DescribeRestorePlansResponseBody extends Model
{
    /**
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @example BE120DAB-F4E7-4C53-ADC3-A97578AB****
     *
     * @var string
     */
    public $requestId;

    /**
     * @var restorePlans[]
     */
    public $restorePlans;
    protected $_name = [
        'pageInfo'     => 'PageInfo',
        'requestId'    => 'RequestId',
        'restorePlans' => 'RestorePlans',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->restorePlans) {
            $res['RestorePlans'] = [];
            if (null !== $this->restorePlans && \is_array($this->restorePlans)) {
                $n = 0;
                foreach ($this->restorePlans as $item) {
                    $res['RestorePlans'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRestorePlansResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RestorePlans'])) {
            if (!empty($map['RestorePlans'])) {
                $model->restorePlans = [];
                $n                   = 0;
                foreach ($map['RestorePlans'] as $item) {
                    $model->restorePlans[$n++] = null !== $item ? restorePlans::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
