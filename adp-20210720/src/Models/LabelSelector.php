<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models;

use AlibabaCloud\SDK\Adp\V20210720\Models\LabelSelector\matchExpressions;
use AlibabaCloud\Tea\Model;

class LabelSelector extends Model
{
    /**
     * @var matchExpressions[]
     */
    public $matchExpressions;

    /**
     * @example key:value
     *
     * @var string[]
     */
    public $matchLabels;
    protected $_name = [
        'matchExpressions' => 'matchExpressions',
        'matchLabels'      => 'matchLabels',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->matchExpressions) {
            $res['matchExpressions'] = [];
            if (null !== $this->matchExpressions && \is_array($this->matchExpressions)) {
                $n = 0;
                foreach ($this->matchExpressions as $item) {
                    $res['matchExpressions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->matchLabels) {
            $res['matchLabels'] = $this->matchLabels;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return LabelSelector
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['matchExpressions'])) {
            if (!empty($map['matchExpressions'])) {
                $model->matchExpressions = [];
                $n                       = 0;
                foreach ($map['matchExpressions'] as $item) {
                    $model->matchExpressions[$n++] = null !== $item ? matchExpressions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['matchLabels'])) {
            $model->matchLabels = $map['matchLabels'];
        }

        return $model;
    }
}
