<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\PreviewGtmRecoveryPlanResponseBody\previews\preview\switchInfos;

use AlibabaCloud\Dara\Model;

class switchInfo extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $strategyName;
    protected $_name = [
        'content' => 'Content',
        'strategyName' => 'StrategyName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
