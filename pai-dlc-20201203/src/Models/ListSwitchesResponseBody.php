<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\SDK\Paidlc\V20201203\Models\ListSwitchesResponseBody\switches;
use AlibabaCloud\Tea\Model;

class ListSwitchesResponseBody extends Model
{
    /**
     * @description 请求Id
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 代码源配置列表
     *
     * @var switches[]
     */
    public $switches;

    /**
     * @description 符合过滤条件的代码源配置的总数量
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'requestId'  => 'RequestId',
        'switches'   => 'Switches',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->switches) {
            $res['Switches'] = [];
            if (null !== $this->switches && \is_array($this->switches)) {
                $n = 0;
                foreach ($this->switches as $item) {
                    $res['Switches'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSwitchesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Switches'])) {
            if (!empty($map['Switches'])) {
                $model->switches = [];
                $n               = 0;
                foreach ($map['Switches'] as $item) {
                    $model->switches[$n++] = null !== $item ? switches::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
