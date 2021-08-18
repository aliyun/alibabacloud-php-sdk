<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models;

use AlibabaCloud\Tea\Model;

class DescribeQualityAreaDistributionStatDataRequest extends Model
{
    /**
     * @description 开始时间，秒级时间戳，如1609344000
     *
     * @var int
     */
    public $startDate;

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
     * @description APP ID
     *
     * @var string
     */
    public $appId;
    protected $_name = [
        'startDate'  => 'StartDate',
        'endDate'    => 'EndDate',
        'parentArea' => 'ParentArea',
        'appId'      => 'AppId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->parentArea) {
            $res['ParentArea'] = $this->parentArea;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
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
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['ParentArea'])) {
            $model->parentArea = $map['ParentArea'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        return $model;
    }
}
