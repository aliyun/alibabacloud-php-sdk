<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListWarningConfigResponseBody\data\warningConfigInfo;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListWarningConfigResponseBody\data\warningConfigInfo\ruleList\warningRule;
use AlibabaCloud\Tea\Model;

class ruleList extends Model
{
    /**
     * @var warningRule[]
     */
    public $warningRule;
    protected $_name = [
        'warningRule' => 'WarningRule',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->warningRule) {
            $res['WarningRule'] = [];
            if (null !== $this->warningRule && \is_array($this->warningRule)) {
                $n = 0;
                foreach ($this->warningRule as $item) {
                    $res['WarningRule'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ruleList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['WarningRule'])) {
            if (!empty($map['WarningRule'])) {
                $model->warningRule = [];
                $n                  = 0;
                foreach ($map['WarningRule'] as $item) {
                    $model->warningRule[$n++] = null !== $item ? warningRule::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
