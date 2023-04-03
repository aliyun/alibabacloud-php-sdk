<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateGtmMonitorRequest;

use AlibabaCloud\Tea\Model;

class ispCityNode extends Model
{
    /**
     * @description The code of the city where the monitored node is deployed.
     *
     * @example 572
     *
     * @var string
     */
    public $cityCode;

    /**
     * @description *   The code of the Internet service provider (ISP) to which the monitored node belongs. For more information about specific values, see the response parameters of DescribeGtmMonitorAvailableConfig.
     *   If the value of the GroupType parameter is BGP or OVERSEAS, IspCode is optional. The default value is 465.
     *   If the value of the GroupType parameter is not BGP or OVERSEAS, IspCode is required and is used together with CityCode.
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
