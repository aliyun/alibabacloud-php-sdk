<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleDetailResponseBody\data\conditions\conditionBasicInfo\checkRange;

use AlibabaCloud\Tea\Model;

class anchor extends Model
{
    /**
     * @var string
     */
    public $anchorCid;

    /**
     * @var string
     */
    public $location;

    /**
     * @var int
     */
    public $hitTime;
    protected $_name = [
        'anchorCid' => 'AnchorCid',
        'location'  => 'Location',
        'hitTime'   => 'HitTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->anchorCid) {
            $res['AnchorCid'] = $this->anchorCid;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->hitTime) {
            $res['HitTime'] = $this->hitTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return anchor
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AnchorCid'])) {
            $model->anchorCid = $map['AnchorCid'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['HitTime'])) {
            $model->hitTime = $map['HitTime'];
        }

        return $model;
    }
}
