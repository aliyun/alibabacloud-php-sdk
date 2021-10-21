<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTrademarkMonitorRulesResponseBody;

use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTrademarkMonitorRulesResponseBody\data\tmMonitorRule;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var tmMonitorRule[]
     */
    public $tmMonitorRule;
    protected $_name = [
        'tmMonitorRule' => 'TmMonitorRule',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tmMonitorRule) {
            $res['TmMonitorRule'] = [];
            if (null !== $this->tmMonitorRule && \is_array($this->tmMonitorRule)) {
                $n = 0;
                foreach ($this->tmMonitorRule as $item) {
                    $res['TmMonitorRule'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['TmMonitorRule'])) {
            if (!empty($map['TmMonitorRule'])) {
                $model->tmMonitorRule = [];
                $n                    = 0;
                foreach ($map['TmMonitorRule'] as $item) {
                    $model->tmMonitorRule[$n++] = null !== $item ? tmMonitorRule::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
