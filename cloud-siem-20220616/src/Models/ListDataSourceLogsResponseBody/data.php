<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListDataSourceLogsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListDataSourceLogsResponseBody\data\dataSourceInstanceLogs;

class data extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $cloudCode;

    /**
     * @var string
     */
    public $dataSourceInstanceId;

    /**
     * @var dataSourceInstanceLogs[]
     */
    public $dataSourceInstanceLogs;

    /**
     * @var string
     */
    public $dataSourceInstanceName;

    /**
     * @var string
     */
    public $dataSourceInstanceRemark;

    /**
     * @var int
     */
    public $subUserId;
    protected $_name = [
        'accountId' => 'AccountId',
        'cloudCode' => 'CloudCode',
        'dataSourceInstanceId' => 'DataSourceInstanceId',
        'dataSourceInstanceLogs' => 'DataSourceInstanceLogs',
        'dataSourceInstanceName' => 'DataSourceInstanceName',
        'dataSourceInstanceRemark' => 'DataSourceInstanceRemark',
        'subUserId' => 'SubUserId',
    ];

    public function validate()
    {
        if (\is_array($this->dataSourceInstanceLogs)) {
            Model::validateArray($this->dataSourceInstanceLogs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->dataSourceInstanceLogs)) {
                $res['DataSourceInstanceLogs'] = [];
                $n1 = 0;
                foreach ($this->dataSourceInstanceLogs as $item1) {
                    $res['DataSourceInstanceLogs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['DataSourceInstanceLogs'] as $item1) {
                    $model->dataSourceInstanceLogs[$n1] = dataSourceInstanceLogs::fromMap($item1);
                    ++$n1;
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
