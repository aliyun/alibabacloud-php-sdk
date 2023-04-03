<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\PreviewGtmRecoveryPlanResponseBody\previews\preview\switchInfos;

use AlibabaCloud\Tea\Model;

class switchInfo extends Model
{
    /**
     * @description The formatted message content.
     *
     * @var string
     */
    public $content;

    /**
     * @description The name of the switching policy for address pools.
     *
     * @example strategy-name-example-1
     *
     * @var string
     */
    public $strategyName;
    protected $_name = [
        'content'      => 'Content',
        'strategyName' => 'StrategyName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->strategyName) {
            $res['StrategyName'] = $this->strategyName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return switchInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['StrategyName'])) {
            $model->strategyName = $map['StrategyName'];
        }

        return $model;
    }
}
