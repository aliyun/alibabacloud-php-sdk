<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateBizUnitRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateBizUnitRequest\updateCommand\bizUnitAccountList;

class updateCommand extends Model
{
    /**
     * @var bizUnitAccountList[]
     */
    public $bizUnitAccountList;

    /**
     * @var int
     */
    public $bizUnitId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $icon;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'bizUnitAccountList' => 'BizUnitAccountList',
        'bizUnitId' => 'BizUnitId',
        'description' => 'Description',
        'displayName' => 'DisplayName',
        'icon' => 'Icon',
        'name' => 'Name',
    ];

    public function validate()
    {
        if (\is_array($this->bizUnitAccountList)) {
            Model::validateArray($this->bizUnitAccountList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizUnitAccountList) {
            if (\is_array($this->bizUnitAccountList)) {
                $res['BizUnitAccountList'] = [];
                $n1 = 0;
                foreach ($this->bizUnitAccountList as $item1) {
                    $res['BizUnitAccountList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizUnitAccountList'])) {
            if (!empty($map['BizUnitAccountList'])) {
                $model->bizUnitAccountList = [];
                $n1 = 0;
                foreach ($map['BizUnitAccountList'] as $item1) {
                    $model->bizUnitAccountList[$n1++] = bizUnitAccountList::fromMap($item1);
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
