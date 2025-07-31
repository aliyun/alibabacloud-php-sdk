<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateDataSourceRequest\createCommand;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateDataSourceRequest\createCommand\prodDataSourceCreate\configItemList;
use AlibabaCloud\Tea\Model;

class prodDataSourceCreate extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $checkActivity;

    /**
     * @description This parameter is required.
     *
     * @var configItemList[]
     */
    public $configItemList;

    /**
     * @example datasource for xx
     *
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
     * @example dp_test
     *
     * @var string
     */
    public $name;

    /**
     * @description This parameter is required.
     *
     * @example MAX_COMPUTE
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkActivity) {
            $res['CheckActivity'] = $this->checkActivity;
        }
        if (null !== $this->configItemList) {
            $res['ConfigItemList'] = [];
            if (null !== $this->configItemList && \is_array($this->configItemList)) {
                $n = 0;
                foreach ($this->configItemList as $item) {
                    $res['ConfigItemList'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return prodDataSourceCreate
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckActivity'])) {
            $model->checkActivity = $map['CheckActivity'];
        }
        if (isset($map['ConfigItemList'])) {
            if (!empty($map['ConfigItemList'])) {
                $model->configItemList = [];
                $n = 0;
                foreach ($map['ConfigItemList'] as $item) {
                    $model->configItemList[$n++] = null !== $item ? configItemList::fromMap($item) : $item;
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
