<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveAISubtitleResponseBody\subtitleConfigs\subtitleConfig;

use AlibabaCloud\Tea\Model;

class rulesRefer extends Model
{
    /**
     * @var string[]
     */
    public $rulesId;
    protected $_name = [
        'rulesId' => 'RulesId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->rulesId) {
            $res['RulesId'] = $this->rulesId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rulesRefer
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RulesId'])) {
            if (!empty($map['RulesId'])) {
                $model->rulesId = $map['RulesId'];
            }
        }

        return $model;
    }
}
