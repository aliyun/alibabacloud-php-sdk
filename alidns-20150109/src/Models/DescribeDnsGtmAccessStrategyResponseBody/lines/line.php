<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategyResponseBody\lines;

use AlibabaCloud\Tea\Model;

class line extends Model
{
    /**
     * @description The code of the source region group.
     *
     * @example default
     *
     * @var string
     */
    public $groupCode;

    /**
     * @description The name of the source region group.
     *
     * @example global
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The line code of the source region.
     *
     * @example default
     *
     * @var string
     */
    public $lineCode;

    /**
     * @description The line name of the source region.
     *
     * @example global
     *
     * @var string
     */
    public $lineName;
    protected $_name = [
        'groupCode' => 'GroupCode',
        'groupName' => 'GroupName',
        'lineCode'  => 'LineCode',
        'lineName'  => 'LineName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupCode) {
            $res['GroupCode'] = $this->groupCode;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->lineCode) {
            $res['LineCode'] = $this->lineCode;
        }
        if (null !== $this->lineName) {
            $res['LineName'] = $this->lineName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return line
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupCode'])) {
            $model->groupCode = $map['GroupCode'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['LineCode'])) {
            $model->lineCode = $map['LineCode'];
        }
        if (isset($map['LineName'])) {
            $model->lineName = $map['LineName'];
        }

        return $model;
    }
}
