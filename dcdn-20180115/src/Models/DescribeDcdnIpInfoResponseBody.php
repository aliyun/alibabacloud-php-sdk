<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class DescribeDcdnIpInfoResponseBody extends Model
{
    /**
     * @description Indicates whether the specified IP address is assigned to an Alibaba Cloud DCDN POP.
     *
     *   True
     *   False
     *
     * @example True
     *
     * @var string
     */
    public $dcdnIp;

    /**
     * @description The ISP to which the specified IP address belongs.
     *
     * @example China Telecom
     *
     * @var string
     */
    public $ISP;

    /**
     * @description The name of the Internet service provider (ISP).
     *
     * @example telecom
     *
     * @var string
     */
    public $ispEname;

    /**
     * @description The Chinese name of the region.
     *
     * @example >  The maximum number of times that users can call this operation per second is 50.
     *
     * @var string
     */
    public $region;

    /**
     * @description The English name of the region.
     *
     * @example China-Guizhou-guiyang
     *
     * @var string
     */
    public $regionEname;

    /**
     * @description The ID of the request.
     *
     * @example 1B1D0EE7-9559-489D-BC4E-279495EB8FB8
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dcdnIp'      => 'DcdnIp',
        'ISP'         => 'ISP',
        'ispEname'    => 'IspEname',
        'region'      => 'Region',
        'regionEname' => 'RegionEname',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dcdnIp) {
            $res['DcdnIp'] = $this->dcdnIp;
        }
        if (null !== $this->ISP) {
            $res['ISP'] = $this->ISP;
        }
        if (null !== $this->ispEname) {
            $res['IspEname'] = $this->ispEname;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->regionEname) {
            $res['RegionEname'] = $this->regionEname;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnIpInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DcdnIp'])) {
            $model->dcdnIp = $map['DcdnIp'];
        }
        if (isset($map['ISP'])) {
            $model->ISP = $map['ISP'];
        }
        if (isset($map['IspEname'])) {
            $model->ispEname = $map['IspEname'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['RegionEname'])) {
            $model->regionEname = $map['RegionEname'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
