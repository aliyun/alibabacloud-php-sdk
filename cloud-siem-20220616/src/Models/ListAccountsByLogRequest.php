<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models;

use AlibabaCloud\Tea\Model;

class ListAccountsByLogRequest extends Model
{
    /**
     * @example hcloud
     *
     * @var string
     */
    public $cloudCode;

    /**
     * @example ["cloud_siem_hcloud_waf_alert_log"]
     *
     * @var string[]
     */
    public $logCodes;

    /**
     * @example qcloud_waf
     *
     * @var string
     */
    public $prodCode;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'cloudCode' => 'CloudCode',
        'logCodes'  => 'LogCodes',
        'prodCode'  => 'ProdCode',
        'regionId'  => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cloudCode) {
            $res['CloudCode'] = $this->cloudCode;
        }
        if (null !== $this->logCodes) {
            $res['LogCodes'] = $this->logCodes;
        }
        if (null !== $this->prodCode) {
            $res['ProdCode'] = $this->prodCode;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAccountsByLogRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CloudCode'])) {
            $model->cloudCode = $map['CloudCode'];
        }
        if (isset($map['LogCodes'])) {
            if (!empty($map['LogCodes'])) {
                $model->logCodes = $map['LogCodes'];
            }
        }
        if (isset($map['ProdCode'])) {
            $model->prodCode = $map['ProdCode'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
