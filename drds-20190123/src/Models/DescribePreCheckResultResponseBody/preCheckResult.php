<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribePreCheckResultResponseBody;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribePreCheckResultResponseBody\preCheckResult\subCheckItems;
use AlibabaCloud\Tea\Model;

class preCheckResult extends Model
{
    /**
     * @var string
     */
    public $preCheckName;

    /**
     * @var string
     */
    public $state;

    /**
     * @var subCheckItems[]
     */
    public $subCheckItems;
    protected $_name = [
        'preCheckName'  => 'PreCheckName',
        'state'         => 'State',
        'subCheckItems' => 'SubCheckItems',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->preCheckName) {
            $res['PreCheckName'] = $this->preCheckName;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->subCheckItems) {
            $res['SubCheckItems'] = [];
            if (null !== $this->subCheckItems && \is_array($this->subCheckItems)) {
                $n = 0;
                foreach ($this->subCheckItems as $item) {
                    $res['SubCheckItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return preCheckResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PreCheckName'])) {
            $model->preCheckName = $map['PreCheckName'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['SubCheckItems'])) {
            if (!empty($map['SubCheckItems'])) {
                $model->subCheckItems = [];
                $n                    = 0;
                foreach ($map['SubCheckItems'] as $item) {
                    $model->subCheckItems[$n++] = null !== $item ? subCheckItems::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
