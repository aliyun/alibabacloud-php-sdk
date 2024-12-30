<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateBizUnitRequest;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateBizUnitRequest\updateCommand\bizUnitAccountList;
use AlibabaCloud\Tea\Model;

class updateCommand extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var bizUnitAccountList[]
     */
    public $bizUnitAccountList;

    /**
     * @description This parameter is required.
     *
     * @example 545844456
     *
     * @var int
     */
    public $bizUnitId;

    /**
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
     * @example 测试
     *
     * @var string
     */
    public $displayName;

    /**
     * @description This parameter is required.
     *
     * @example icon-environment
     *
     * @var string
     */
    public $icon;

    /**
     * @description This parameter is required.
     *
     * @example bz_code_name
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'bizUnitAccountList' => 'BizUnitAccountList',
        'bizUnitId'          => 'BizUnitId',
        'description'        => 'Description',
        'displayName'        => 'DisplayName',
        'icon'               => 'Icon',
        'name'               => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizUnitAccountList) {
            $res['BizUnitAccountList'] = [];
            if (null !== $this->bizUnitAccountList && \is_array($this->bizUnitAccountList)) {
                $n = 0;
                foreach ($this->bizUnitAccountList as $item) {
                    $res['BizUnitAccountList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->bizUnitId) {
            $res['BizUnitId'] = $this->bizUnitId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->icon) {
            $res['Icon'] = $this->icon;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['BizUnitAccountList'])) {
            if (!empty($map['BizUnitAccountList'])) {
                $model->bizUnitAccountList = [];
                $n                         = 0;
                foreach ($map['BizUnitAccountList'] as $item) {
                    $model->bizUnitAccountList[$n++] = null !== $item ? bizUnitAccountList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['BizUnitId'])) {
            $model->bizUnitId = $map['BizUnitId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['Icon'])) {
            $model->icon = $map['Icon'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
