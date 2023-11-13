<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebCcProtectSwitchResponseBody\protectSwitchList;
use AlibabaCloud\Tea\Model;

class DescribeWebCcProtectSwitchResponseBody extends Model
{
    /**
     * @description The status of each protection policy for a website.
     *
     * @var protectSwitchList[]
     */
    public $protectSwitchList;

    /**
     * @description The ID of the request.
     *
     * @example 3ADD9EED-CA4B-488C-BC82-01B0B899363D
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'protectSwitchList' => 'ProtectSwitchList',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->protectSwitchList) {
            $res['ProtectSwitchList'] = [];
            if (null !== $this->protectSwitchList && \is_array($this->protectSwitchList)) {
                $n = 0;
                foreach ($this->protectSwitchList as $item) {
                    $res['ProtectSwitchList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeWebCcProtectSwitchResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProtectSwitchList'])) {
            if (!empty($map['ProtectSwitchList'])) {
                $model->protectSwitchList = [];
                $n                        = 0;
                foreach ($map['ProtectSwitchList'] as $item) {
                    $model->protectSwitchList[$n++] = null !== $item ? protectSwitchList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
