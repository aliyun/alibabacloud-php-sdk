<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\SyncQualityCheckResponseBody\data;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\SyncQualityCheckResponseBody\data\rules\hit;
use AlibabaCloud\Tea\Model;

class rules extends Model
{
    /**
     * @var hit[]
     */
    public $hit;

    /**
     * @example 232232
     *
     * @var string
     */
    public $rid;

    /**
     * @var string
     */
    public $ruleName;
    protected $_name = [
        'hit'      => 'Hit',
        'rid'      => 'Rid',
        'ruleName' => 'RuleName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hit) {
            $res['Hit'] = [];
            if (null !== $this->hit && \is_array($this->hit)) {
                $n = 0;
                foreach ($this->hit as $item) {
                    $res['Hit'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->rid) {
            $res['Rid'] = $this->rid;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Hit'])) {
            if (!empty($map['Hit'])) {
                $model->hit = [];
                $n          = 0;
                foreach ($map['Hit'] as $item) {
                    $model->hit[$n++] = null !== $item ? hit::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Rid'])) {
            $model->rid = $map['Rid'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        return $model;
    }
}
