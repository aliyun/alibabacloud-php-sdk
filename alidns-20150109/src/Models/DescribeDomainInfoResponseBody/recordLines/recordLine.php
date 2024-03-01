<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainInfoResponseBody\recordLines;

use AlibabaCloud\Tea\Model;

class recordLine extends Model
{
    /**
     * @description The code of the parent line. This parameter is not returned if the line has no parent line.
     *
     * @example internal
     *
     * @var string
     */
    public $fatherCode;

    /**
     * @description The code of the line.
     *
     * @example cn_region_xibei
     *
     * @var string
     */
    public $lineCode;

    /**
     * @description The name of the parent line.
     *
     * @var string
     */
    public $lineDisplayName;

    /**
     * @description The name of the line.
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
