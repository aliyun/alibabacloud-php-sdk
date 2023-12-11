<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models;

use AlibabaCloud\Tea\Model;

class CloseDeliveryRequest extends Model
{
    /**
     * @description The log code of the cloud service, such as the code of the process log for Security Center. You can obtain the log code from the response of the ListDelivery operation.
     *
     * @example cloud_siem_aegis_proc
     *
     * @var string
     */
    public $logCode;

    /**
     * @description The code of the cloud service. Valid values:
     *
     *   qcloud_waf
     *   qlcoud_cfw
     *   hcloud_waf
     *   hcloud_cfw
     *   ddos
     *   sas
     *   cfw
     *   config
     *   csk
     *   fc
     *   rds
     *   nas
     *   apigateway
     *   cdn
     *   mongodb
     *   eip
     *   slb
     *   vpc
     *   actiontrail
     *   waf
     *   bastionhost
     *   oss
     *   polardb
     *
     * @example sas
     *
     * @var string
     */
    public $productCode;

    /**
     * @description The region in which the data management center of the threat analysis feature resides. Specify this parameter based on the region where your assets reside. Valid values:
     *
     *   cn-hangzhou: Your assets reside in regions inside the Chinese mainland or in the China (Hong Kong) region.
     *   ap-southeast-1: Your assets reside in regions outside the Chinese mainland, excluding the China (Hong Kong) region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'logCode'     => 'LogCode',
        'productCode' => 'ProductCode',
        'regionId'    => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logCode) {
            $res['LogCode'] = $this->logCode;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CloseDeliveryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogCode'])) {
            $model->logCode = $map['LogCode'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
