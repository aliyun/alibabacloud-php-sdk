<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\CreateRuleRequest\ruleActions\trafficMirrorConfig;

use AlibabaCloud\SDK\Alb\V20200616\Models\CreateRuleRequest\ruleActions\trafficMirrorConfig\mirrorGroupConfig\serverGroupTuples;
use AlibabaCloud\Tea\Model;

class mirrorGroupConfig extends Model
{
    /**
     * @description The configuration of the server group to which traffic is mirrored.
     *
     * @var serverGroupTuples[]
     */
    public $serverGroupTuples;
    protected $_name = [
        'serverGroupTuples' => 'ServerGroupTuples',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serverGroupTuples) {
            $res['ServerGroupTuples'] = [];
            if (null !== $this->serverGroupTuples && \is_array($this->serverGroupTuples)) {
                $n = 0;
                foreach ($this->serverGroupTuples as $item) {
                    $res['ServerGroupTuples'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mirrorGroupConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServerGroupTuples'])) {
            if (!empty($map['ServerGroupTuples'])) {
                $model->serverGroupTuples = [];
                $n                        = 0;
                foreach ($map['ServerGroupTuples'] as $item) {
                    $model->serverGroupTuples[$n++] = null !== $item ? serverGroupTuples::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
