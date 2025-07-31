<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateDataSourceConfigRequest;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateDataSourceConfigRequest\updateCommand\configItemList;
use AlibabaCloud\Tea\Model;

class updateCommand extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var configItemList[]
     */
    public $configItemList;

    /**
     * @description This parameter is required.
     *
     * @example 13231313
     *
     * @var int
     */
    public $id;
    protected $_name = [
        'configItemList' => 'ConfigItemList',
        'id' => 'Id',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->configItemList) {
            $res['ConfigItemList'] = [];
            if (null !== $this->configItemList && \is_array($this->configItemList)) {
                $n = 0;
                foreach ($this->configItemList as $item) {
                    $res['ConfigItemList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return updateCommand
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigItemList'])) {
            if (!empty($map['ConfigItemList'])) {
                $model->configItemList = [];
                $n = 0;
                foreach ($map['ConfigItemList'] as $item) {
                    $model->configItemList[$n++] = null !== $item ? configItemList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
