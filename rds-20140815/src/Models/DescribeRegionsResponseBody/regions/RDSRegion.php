<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRegionsResponseBody\regions;

use AlibabaCloud\Tea\Model;

class RDSRegion extends Model
{
    /**
     * @description The region name. The return value of this parameter is in the language that is specified by the **AcceptLanguage** parameter. For example, if the value of the RegionId parameter in the response is cn-hangzhou, the following values are returned for the LocalName parameter:
     *
     *   If the value of the **AcceptLanguage** parameter is **zh-CN**, the value `华东1（杭州）` is returned for the LocalName parameter.
     *   If the value of the **AcceptLanguage** parameter is **en-US**, the value China (Hangzhou) is returned for the LocalName parameter.
     *
     * @example China (Hangzhou)
     *
     * @var string
     */
    public $localName;

    /**
     * @description The endpoint that is used to connect to Alibaba Cloud services in the region. For more information, see [Endpoints](https://help.aliyun.com/document_detail/610370.html).
     *
     * @example rds.aliyuncs.com
     *
     * @var string
     */
    public $regionEndpoint;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The zone ID.
     *
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $zoneId;

    /**
     * @description The zone name. The return value of this parameter is in the language that is specified by the **AcceptLanguage** parameter. For example, if the value of the ZoneId parameter in the response is cn-hangzhou-h, the following values are returned for the ZoneName parameter:
     *
     *   If the value of the **AcceptLanguage** parameter is **zh-CN**, the `杭州 可用区 H` is returned for the ZoneName parameter.
     *   If the value of the **AcceptLanguage** parameter is **en-US**, the value Hangzhou Zone H is returned for the ZoneName parameter.
     *
     * @example Hangzhou Zone H
     *
     * @var string
     */
    public $zoneName;
    protected $_name = [
        'localName'      => 'LocalName',
        'regionEndpoint' => 'RegionEndpoint',
        'regionId'       => 'RegionId',
        'zoneId'         => 'ZoneId',
        'zoneName'       => 'ZoneName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->localName) {
            $res['LocalName'] = $this->localName;
        }
        if (null !== $this->regionEndpoint) {
            $res['RegionEndpoint'] = $this->regionEndpoint;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->zoneName) {
            $res['ZoneName'] = $this->zoneName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RDSRegion
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LocalName'])) {
            $model->localName = $map['LocalName'];
        }
        if (isset($map['RegionEndpoint'])) {
            $model->regionEndpoint = $map['RegionEndpoint'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['ZoneName'])) {
            $model->zoneName = $map['ZoneName'];
        }

        return $model;
    }
}
