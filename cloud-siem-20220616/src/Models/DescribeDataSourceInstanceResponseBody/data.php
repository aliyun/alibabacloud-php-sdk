<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeDataSourceInstanceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeDataSourceInstanceResponseBody\data\dataSourceInstanceParams;

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
     * @var dataSourceInstanceParams[]
     */
    public $dataSourceInstanceParams;
    protected $_name = [
        'accountId' => 'AccountId',
        'cloudCode' => 'CloudCode',
        'dataSourceInstanceId' => 'DataSourceInstanceId',
        'dataSourceInstanceParams' => 'DataSourceInstanceParams',
    ];

    public function validate()
    {
        if (\is_array($this->dataSourceInstanceParams)) {
            Model::validateArray($this->dataSourceInstanceParams);
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

        if (null !== $this->dataSourceInstanceParams) {
            if (\is_array($this->dataSourceInstanceParams)) {
                $res['DataSourceInstanceParams'] = [];
                $n1 = 0;
                foreach ($this->dataSourceInstanceParams as $item1) {
                    $res['DataSourceInstanceParams'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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

        if (isset($map['DataSourceInstanceParams'])) {
            if (!empty($map['DataSourceInstanceParams'])) {
                $model->dataSourceInstanceParams = [];
                $n1 = 0;
                foreach ($map['DataSourceInstanceParams'] as $item1) {
                    $model->dataSourceInstanceParams[$n1++] = dataSourceInstanceParams::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
