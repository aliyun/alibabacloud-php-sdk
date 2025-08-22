<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateEnvServiceMonitorResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $matchedMsg;

    /**
     * @var string
     */
    public $matchedTargetCount;
    protected $_name = [
        'matchedMsg' => 'MatchedMsg',
        'matchedTargetCount' => 'MatchedTargetCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
