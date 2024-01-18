<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeDataSourceInstanceResponseBody;

use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeDataSourceInstanceResponseBody\data\dataSourceInstanceParams;
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
     * @description The code of the cloud service provider. Valid values:
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
     * @description The ID of the data source. The ID is an MD5 hash value that is calculated by the threat analysis feature based on specific parameters.
     *
     * @example 220ba97c9d1fdb0b9c7e8c7ca328d7ea
     *
     * @var string
     */
    public $dataSourceInstanceId;

    /**
     * @description The parameters of the data source.
     *
     * @var dataSourceInstanceParams[]
     */
    public $dataSourceInstanceParams;
    protected $_name = [
        'accountId'                => 'AccountId',
        'cloudCode'                => 'CloudCode',
        'dataSourceInstanceId'     => 'DataSourceInstanceId',
        'dataSourceInstanceParams' => 'DataSourceInstanceParams',
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
        if (null !== $this->dataSourceInstanceParams) {
            $res['DataSourceInstanceParams'] = [];
            if (null !== $this->dataSourceInstanceParams && \is_array($this->dataSourceInstanceParams)) {
                $n = 0;
                foreach ($this->dataSourceInstanceParams as $item) {
                    $res['DataSourceInstanceParams'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['DataSourceInstanceParams'])) {
            if (!empty($map['DataSourceInstanceParams'])) {
                $model->dataSourceInstanceParams = [];
                $n                               = 0;
                foreach ($map['DataSourceInstanceParams'] as $item) {
                    $model->dataSourceInstanceParams[$n++] = null !== $item ? dataSourceInstanceParams::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
