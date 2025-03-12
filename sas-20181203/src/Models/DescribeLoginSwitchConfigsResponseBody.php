<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeLoginSwitchConfigsResponseBody\configList;
use AlibabaCloud\Tea\Model;

class DescribeLoginSwitchConfigsResponseBody extends Model
{
    /**
     * @description The configuration item returned.
     *
     * @var configList[]
     */
    public $configList;

    /**
     * @description The number of returned configuration items.
     *
     * @example 2
     *
     * @var int
     */
    public $count;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 0B48AB3C-84FC-424D-A01D-B9270EF4****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'configList' => 'ConfigList',
        'count'      => 'Count',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configList) {
            $res['ConfigList'] = [];
            if (null !== $this->configList && \is_array($this->configList)) {
                $n = 0;
                foreach ($this->configList as $item) {
                    $res['ConfigList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLoginSwitchConfigsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigList'])) {
            if (!empty($map['ConfigList'])) {
                $model->configList = [];
                $n                 = 0;
                foreach ($map['ConfigList'] as $item) {
                    $model->configList[$n++] = null !== $item ? configList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
