<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models;

use AlibabaCloud\Tea\Model;

class SubmitImportLogTasksRequest extends Model
{
    /**
     * @example [{"AccountId":"123123","Imported":1}]
     *
     * @var string
     */
    public $accounts;

    /**
     * @example ["cloud_siem_qcloud_cfw_alert_log"]
     *
     * @var int
     */
    public $autoImported;

    /**
     * @example hcloud
     *
     * @var string
     */
    public $cloudCode;

    /**
     * @example ["cloud_siem_qcloud_cfw_alert_log"]
     *
     * @var string
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
        'accounts'     => 'Accounts',
        'autoImported' => 'AutoImported',
        'cloudCode'    => 'CloudCode',
        'logCodes'     => 'LogCodes',
        'prodCode'     => 'ProdCode',
        'regionId'     => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accounts) {
            $res['Accounts'] = $this->accounts;
        }
        if (null !== $this->autoImported) {
            $res['AutoImported'] = $this->autoImported;
        }
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
     * @return SubmitImportLogTasksRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Accounts'])) {
            $model->accounts = $map['Accounts'];
        }
        if (isset($map['AutoImported'])) {
            $model->autoImported = $map['AutoImported'];
        }
        if (isset($map['CloudCode'])) {
            $model->cloudCode = $map['CloudCode'];
        }
        if (isset($map['LogCodes'])) {
            $model->logCodes = $map['LogCodes'];
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
