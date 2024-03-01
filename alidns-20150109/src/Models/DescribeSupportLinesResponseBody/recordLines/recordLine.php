<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeSupportLinesResponseBody\recordLines;

use AlibabaCloud\Tea\Model;

class recordLine extends Model
{
    /**
     * @description 2021-12-06T02:47:26.000+0000
     *
     * @example unicom
     *
     * @var string
     */
    public $fatherCode;

    /**
     * @description 子线路Code。
     *
     * @example cn_unicom_shanxi
     *
     * @var string
     */
    public $lineCode;

    /**
     * @description 父线路展示名称。
     *
     * @example 联通
     *
     * @var string
     */
    public $lineDisplayName;

    /**
     * @description 子线路展示名称。
     *
     * @example 联通_山西
     *
     * @var string
     */
    public $lineName;
    protected $_name = [
        'fatherCode'      => 'FatherCode',
        'lineCode'        => 'LineCode',
        'lineDisplayName' => 'LineDisplayName',
        'lineName'        => 'LineName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fatherCode) {
            $res['FatherCode'] = $this->fatherCode;
        }
        if (null !== $this->lineCode) {
            $res['LineCode'] = $this->lineCode;
        }
        if (null !== $this->lineDisplayName) {
            $res['LineDisplayName'] = $this->lineDisplayName;
        }
        if (null !== $this->lineName) {
            $res['LineName'] = $this->lineName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recordLine
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FatherCode'])) {
            $model->fatherCode = $map['FatherCode'];
        }
        if (isset($map['LineCode'])) {
            $model->lineCode = $map['LineCode'];
        }
        if (isset($map['LineDisplayName'])) {
            $model->lineDisplayName = $map['LineDisplayName'];
        }
        if (isset($map['LineName'])) {
            $model->lineName = $map['LineName'];
        }

        return $model;
    }
}
