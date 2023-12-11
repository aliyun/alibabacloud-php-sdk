<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListDeliveryResponseBody\data;

use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DataProductListLogMapValue;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListDeliveryResponseBody\data\productList\logList;
use AlibabaCloud\Tea\Model;

class productList extends Model
{
    /**
     * @description The logs of the cloud services.
     *
     * @var logList[]
     */
    public $logList;

    /**
     * @description The log group. For example, in Security Center, the logs of hosts and networks are stored in different groups. Key indicates the group information, and value indicates the logs in the group.
     *
     * @var DataProductListLogMapValue[][]
     */
    public $logMap;

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
     * @description This parameter is deprecated.
     *
     * @example Security Center
     *
     * @var string
     */
    public $productName;
    protected $_name = [
        'logList'     => 'LogList',
        'logMap'      => 'LogMap',
        'productCode' => 'ProductCode',
        'productName' => 'ProductName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logList) {
            $res['LogList'] = [];
            if (null !== $this->logList && \is_array($this->logList)) {
                $n = 0;
                foreach ($this->logList as $item) {
                    $res['LogList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->logMap) {
            $res['LogMap'] = $this->logMap;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return productList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogList'])) {
            if (!empty($map['LogList'])) {
                $model->logList = [];
                $n              = 0;
                foreach ($map['LogList'] as $item) {
                    $model->logList[$n++] = null !== $item ? logList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['LogMap'])) {
            $model->logMap = $map['LogMap'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }

        return $model;
    }
}
