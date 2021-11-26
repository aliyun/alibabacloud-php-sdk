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
     * @var int
     */
    public $hitTime;

    /**
     * @var string
     */
    public $location;
    protected $_name = [
        'anchorCid' => 'AnchorCid',
        'hitTime'   => 'HitTime',
        'location'  => 'Location',
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
        if (null !== $this->hitTime) {
            $res['HitTime'] = $this->hitTime;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
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
        if (isset($map['HitTime'])) {
            $model->hitTime = $map['HitTime'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }

        return $model;
    }
}
