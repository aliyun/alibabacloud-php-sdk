<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateEnvServiceMonitorResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Indicates whether targets are matched.
     *
     * @example Match successful.
     *
     * @var string
     */
    public $matchedMsg;

    /**
     * @description The number of matched targets.
     *
     * @example 1
     *
     * @var string
     */
    public $matchedTargetCount;
    protected $_name = [
        'matchedMsg'         => 'MatchedMsg',
        'matchedTargetCount' => 'MatchedTargetCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->matchedMsg) {
            $res['MatchedMsg'] = $this->matchedMsg;
        }
        if (null !== $this->matchedTargetCount) {
            $res['MatchedTargetCount'] = $this->matchedTargetCount;
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
        if (isset($map['MatchedMsg'])) {
            $model->matchedMsg = $map['MatchedMsg'];
        }
        if (isset($map['MatchedTargetCount'])) {
            $model->matchedTargetCount = $map['MatchedTargetCount'];
        }

        return $model;
    }
}
