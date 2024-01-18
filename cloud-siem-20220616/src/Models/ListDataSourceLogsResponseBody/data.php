<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListDataSourceLogsResponseBody;

use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListDataSourceLogsResponseBody\data\dataSourceInstanceLogs;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The ID of the cloud account.
     *
     * @example 123xxxxxxx
     *
     * @var string
     */
    public $accountId;

    /**
     * @description The code that is used for multi-cloud environments. Valid values:
     *
     *   qcloud: Tencent Cloud
     *   aliyun: Alibaba Cloud
     *   hcloud: Huawei Cloud
     *
     * @example hcloud
     *
     * @var string
     */
    public $cloudCode;

    /**
     * @description The ID of the data source. The value is obtained after the threat analysis feature calculates the MD5 hash value of a parameter.
     *
     * @example 220ba97c9d1fdb0b9c7e8c7ca328d7ea
     *
     * @var string
     */
    public $dataSourceInstanceId;

    /**
     * @description The logs of the data source.
     *
     * @var dataSourceInstanceLogs[]
     */
    public $dataSourceInstanceLogs;

    /**
     * @description The name of the data source.
     *
     * @example waf kafka
     *
     * @var string
     */
    public $dataSourceInstanceName;

    /**
     * @description The remarks of the data source.
     *
     * @example waf kafka
     *
     * @var string
     */
    public $dataSourceInstanceRemark;

    /**
     * @description The ID of the Alibaba Cloud account.
     *
     * @example 123XXXXXXXX
     *
     * @var int
     */
    public $subUserId;
    protected $_name = [
        'accountId'                => 'AccountId',
        'cloudCode'                => 'CloudCode',
        'dataSourceInstanceId'     => 'DataSourceInstanceId',
        'dataSourceInstanceLogs'   => 'DataSourceInstanceLogs',
        'dataSourceInstanceName'   => 'DataSourceInstanceName',
        'dataSourceInstanceRemark' => 'DataSourceInstanceRemark',
        'subUserId'                => 'SubUserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->cloudCode) {
            $res['CloudCode'] = $this->cloudCode;
        }
        if (null !== $this->dataSourceInstanceId) {
            $res['DataSourceInstanceId'] = $this->dataSourceInstanceId;
        }
        if (null !== $this->dataSourceInstanceLogs) {
            $res['DataSourceInstanceLogs'] = [];
            if (null !== $this->dataSourceInstanceLogs && \is_array($this->dataSourceInstanceLogs)) {
                $n = 0;
                foreach ($this->dataSourceInstanceLogs as $item) {
                    $res['DataSourceInstanceLogs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->dataSourceInstanceName) {
            $res['DataSourceInstanceName'] = $this->dataSourceInstanceName;
        }
        if (null !== $this->dataSourceInstanceRemark) {
            $res['DataSourceInstanceRemark'] = $this->dataSourceInstanceRemark;
        }
        if (null !== $this->subUserId) {
            $res['SubUserId'] = $this->subUserId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['CloudCode'])) {
            $model->cloudCode = $map['CloudCode'];
        }
        if (isset($map['DataSourceInstanceId'])) {
            $model->dataSourceInstanceId = $map['DataSourceInstanceId'];
        }
        if (isset($map['DataSourceInstanceLogs'])) {
            if (!empty($map['DataSourceInstanceLogs'])) {
                $model->dataSourceInstanceLogs = [];
                $n                             = 0;
                foreach ($map['DataSourceInstanceLogs'] as $item) {
                    $model->dataSourceInstanceLogs[$n++] = null !== $item ? dataSourceInstanceLogs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DataSourceInstanceName'])) {
            $model->dataSourceInstanceName = $map['DataSourceInstanceName'];
        }
        if (isset($map['DataSourceInstanceRemark'])) {
            $model->dataSourceInstanceRemark = $map['DataSourceInstanceRemark'];
        }
        if (isset($map['SubUserId'])) {
            $model->subUserId = $map['SubUserId'];
        }

        return $model;
    }
}
