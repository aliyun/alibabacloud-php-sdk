<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveAIStudioResponseBody\studioConfigs\subtitleConfig;

use AlibabaCloud\Tea\Model;

class ruleIds extends Model
{
    /**
     * @var string[]
     */
    public $ruleId;
    protected $_name = [
        'ruleId' => 'ruleId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->ruleId) {
            $res['ruleId'] = $this->ruleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ruleIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ruleId'])) {
            if (!empty($map['ruleId'])) {
                $model->ruleId = $map['ruleId'];
            }
        }

        return $model;
    }
}
