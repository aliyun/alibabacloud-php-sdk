<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ConfigDataSetResponseBody\data\ruleInfo\conditions\conditionBasicInfo\checkRange;

use AlibabaCloud\Tea\Model;

class anchor extends Model
{
    /**
     * @var string
     */
    public $cid;

    /**
     * @var int
     */
    public $hitTime;

    /**
     * @var string
     */
    public $location;
    protected $_name = [
        'cid'      => 'Cid',
        'hitTime'  => 'HitTime',
        'location' => 'Location',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cid) {
            $res['Cid'] = $this->cid;
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
        if (isset($map['Cid'])) {
            $model->cid = $map['Cid'];
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
