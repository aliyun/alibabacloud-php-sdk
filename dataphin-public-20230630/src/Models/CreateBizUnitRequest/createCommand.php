<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateBizUnitRequest;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateBizUnitRequest\createCommand\bizUnitAccountList;
use AlibabaCloud\Tea\Model;

class createCommand extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var bizUnitAccountList[]
     */
    public $bizUnitAccountList;

    /**
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
     * @example create_object_name
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
     * @example DEV_PROD
     *
     * @var string
     */
    public $mode;

    /**
     * @description This parameter is required.
     *
     * @example create_object_code_name
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'bizUnitAccountList' => 'BizUnitAccountList',
        'description'        => 'Description',
        'displayName'        => 'DisplayName',
        'icon'               => 'Icon',
        'mode'               => 'Mode',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->icon) {
            $res['Icon'] = $this->icon;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return createCommand
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['Icon'])) {
            $model->icon = $map['Icon'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
