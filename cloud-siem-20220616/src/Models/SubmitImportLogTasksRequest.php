<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models;

use AlibabaCloud\Tea\Model;

class SubmitImportLogTasksRequest extends Model
{
    /**
     * @description The accounts that you want to add. The value is a JSON array. Valid values:
     *
     *   AccountId: the IDs of the accounts.
     *
     *   Imported: specifies whether to add the accounts. Valid values:
     *
     *   0: no
     *   1: yes
     *
     * @example [{"AccountId":"123123","Imported":1}]
     *
     * @var string
     */
    public $accounts;

    /**
     * @description Specifies whether to automatically add the account for which the logging feature is configured. Valid values:
     *
     *   1: yes
     *   0: no
     *
     * @example ["cloud_siem_qcloud_cfw_alert_log"]
     *
     * @var int
     */
    public $autoImported;

    /**
     * @description The code that is used for multi-cloud environments.
     *
     * Valid values:
     *
     *   qcloud.
     *   hcloud.
     *   aliyun.
     *
     * @example hcloud
     *
     * @var string
     */
    public $cloudCode;

    /**
     * @description The logs that you want to collect. The value is a JSON array.
     *
     * @example ["cloud_siem_qcloud_cfw_alert_log"]
     *
     * @var string
     */
    public $logCodes;

    /**
     * @description The code of the service.
     *
     * @example qcloud_waf
     *
     * @var string
     */
    public $prodCode;

    /**
     * @description The data management center of the threat analysis feature. Specify this parameter based on the region where your assets reside. Valid values:
     *
     *   cn-hangzhou: Your assets reside in regions inside China.
     *   ap-southeast-1: Your assets reside in regions outside China.
     *
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
