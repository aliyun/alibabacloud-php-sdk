<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DDoSPro\V20170725\Models\DescribeBizFlowResponseBody;

use AlibabaCloud\SDK\DDoSPro\V20170725\Models\DescribeBizFlowResponseBody\data\timeScope;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $inKbps;

    /**
     * @var string[]
     */
    public $outKbps;

    /**
     * @var timeScope
     */
    public $timeScope;
    protected $_name = [
        'inKbps'    => 'InKbps',
        'outKbps'   => 'OutKbps',
        'timeScope' => 'TimeScope',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inKbps) {
            $res['InKbps'] = $this->inKbps;
        }
        if (null !== $this->outKbps) {
            $res['OutKbps'] = $this->outKbps;
        }
        if (null !== $this->timeScope) {
            $res['TimeScope'] = null !== $this->timeScope ? $this->timeScope->toMap() : null;
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
        if (isset($map['InKbps'])) {
            if (!empty($map['InKbps'])) {
                $model->inKbps = $map['InKbps'];
            }
        }
        if (isset($map['OutKbps'])) {
            if (!empty($map['OutKbps'])) {
                $model->outKbps = $map['OutKbps'];
            }
        }
        if (isset($map['TimeScope'])) {
            $model->timeScope = timeScope::fromMap($map['TimeScope']);
        }

        return $model;
    }
}
