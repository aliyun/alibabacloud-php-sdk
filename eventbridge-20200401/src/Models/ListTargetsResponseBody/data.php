<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListTargetsResponseBody;

use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListTargetsResponseBody\data\targets;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description If excess return values exist, this parameter is returned.
     *
     * @example 1
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The name of the event rule.
     *
     * @var targets[]
     */
    public $targets;

    /**
     * @description The total number of entries.
     *
     * @example 18
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'nextToken' => 'NextToken',
        'targets'   => 'Targets',
        'total'     => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->targets) {
            $res['Targets'] = [];
            if (null !== $this->targets && \is_array($this->targets)) {
                $n = 0;
                foreach ($this->targets as $item) {
                    $res['Targets'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['Targets'])) {
            if (!empty($map['Targets'])) {
                $model->targets = [];
                $n              = 0;
                foreach ($map['Targets'] as $item) {
                    $model->targets[$n++] = null !== $item ? targets::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
