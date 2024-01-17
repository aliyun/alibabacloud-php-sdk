<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\AddGtmMonitorRequest;

use AlibabaCloud\Tea\Model;

class ispCityNode extends Model
{
    /**
     * @description The city code.
     *
     * Specify the parameter according to the value of CityCode returned by the DescribeGtmMonitorAvailableConfig operation.
     * @example 503
     *
     * @var string
     */
    public $cityCode;

    /**
     * @description The Internet service provider (ISP) node. Specify the parameter according to the value of IspCode returned by the DescribeGtmMonitorAvailableConfig operation.
     *
     *   If the return value of GroupType for the DescribeGtmMonitorAvailableConfig operation is BGP or Overseas, IspCode is not required and is set to 465 by default.
     *   If the return value of GroupType for the DescribeGtmMonitorAvailableConfig operation is not BGP or Overseas, IspCode is required. When IspCode is specified, CityCode is required.
     *
     * @example 465
     *
     * @var string
     */
    public $ispCode;
    protected $_name = [
        'cityCode' => 'CityCode',
        'ispCode'  => 'IspCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cityCode) {
            $res['CityCode'] = $this->cityCode;
        }
        if (null !== $this->ispCode) {
            $res['IspCode'] = $this->ispCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ispCityNode
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CityCode'])) {
            $model->cityCode = $map['CityCode'];
        }
        if (isset($map['IspCode'])) {
            $model->ispCode = $map['IspCode'];
        }

        return $model;
    }
}
