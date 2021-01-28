<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class DescribeDcdnIpInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $ISP;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $ispEname;

    /**
     * @var string
     */
    public $regionEname;

    /**
     * @var string
     */
    public $dcdnIp;
    protected $_name = [
        'requestId'   => 'RequestId',
        'ISP'         => 'ISP',
        'region'      => 'Region',
        'ispEname'    => 'IspEname',
        'regionEname' => 'RegionEname',
        'dcdnIp'      => 'DcdnIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->ISP) {
            $res['ISP'] = $this->ISP;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->ispEname) {
            $res['IspEname'] = $this->ispEname;
        }
        if (null !== $this->regionEname) {
            $res['RegionEname'] = $this->regionEname;
        }
        if (null !== $this->dcdnIp) {
            $res['DcdnIp'] = $this->dcdnIp;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ISP'])) {
            $model->ISP = $map['ISP'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['IspEname'])) {
            $model->ispEname = $map['IspEname'];
        }
        if (isset($map['RegionEname'])) {
            $model->regionEname = $map['RegionEname'];
        }
        if (isset($map['DcdnIp'])) {
            $model->dcdnIp = $map['DcdnIp'];
        }

        return $model;
    }
}
