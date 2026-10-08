<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CheckDataSourceConnectivityOnResourceGroupRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CheckDataSourceConnectivityOnResourceGroupRequest\checkCommand\configItemList;

class checkCommand extends Model
{
    /**
     * @var configItemList[]
     */
    public $configItemList;

    /**
     * @var string
     */
    public $dataSourceId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'configItemList' => 'ConfigItemList',
        'dataSourceId' => 'DataSourceId',
        'resourceGroupId' => 'ResourceGroupId',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->configItemList)) {
            Model::validateArray($this->configItemList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configItemList) {
            if (\is_array($this->configItemList)) {
                $res['ConfigItemList'] = [];
                $n1 = 0;
                foreach ($this->configItemList as $item1) {
                    $res['ConfigItemList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['ConfigItemList'])) {
            if (!empty($map['ConfigItemList'])) {
                $model->configItemList = [];
                $n1 = 0;
                foreach ($map['ConfigItemList'] as $item1) {
                    $model->configItemList[$n1] = configItemList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
