<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models;

use AlibabaCloud\Tea\Model;

class DescribeQualityAreaDistributionStatDataRequest extends Model
{
    /**
     * @description APP ID
     *
     * @var string
     */
    public $appId;

    /**
     * @description 结束时间，秒级时间戳，如1609344000
     *
     * @var int
     */
    public $endDate;

    /**
     * @description 父级地区名称，为空取世界范围（国家维度）的统计，如： ""->中国、英国 "中国"->北京市、广东省 "广东省"->广州市、深圳市、佛山市 "北京市"->北京市
     *
     * @var string
     */
    public $parentArea;

    /**
     * @description 开始时间，秒级时间戳，如1609344000
     *
     * @var int
     */
    public $startDate;
    protected $_name = [
        'appId'      => 'AppId',
        'endDate'    => 'EndDate',
        'parentArea' => 'ParentArea',
        'startDate'  => 'StartDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->parentArea) {
            $res['ParentArea'] = $this->parentArea;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeQualityAreaDistributionStatDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['ParentArea'])) {
            $model->parentArea = $map['ParentArea'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }

        return $model;
    }
}
