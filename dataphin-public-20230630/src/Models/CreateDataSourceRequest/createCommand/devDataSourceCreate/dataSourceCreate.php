<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateDataSourceRequest\createCommand\devDataSourceCreate;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateDataSourceRequest\createCommand\devDataSourceCreate\dataSourceCreate\configItemList;

class dataSourceCreate extends Model
{
    /**
     * @var bool
     */
    public $checkActivity;

    /**
     * @var configItemList[]
     */
    public $configItemList;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'checkActivity' => 'CheckActivity',
        'configItemList' => 'ConfigItemList',
        'description' => 'Description',
        'name' => 'Name',
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
        if (null !== $this->checkActivity) {
            $res['CheckActivity'] = $this->checkActivity;
        }

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

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['CheckActivity'])) {
            $model->checkActivity = $map['CheckActivity'];
        }

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

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
