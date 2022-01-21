<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\PutEventRuleRequest;

use AlibabaCloud\Tea\Model;

class eventPattern extends Model
{
    /**
     * @var string
     */
    public $customFilters;

    /**
     * @var string[]
     */
    public $eventTypeList;

    /**
     * @var string[]
     */
    public $levelList;

    /**
     * @var string[]
     */
    public $nameList;

    /**
     * @var string
     */
    public $product;

    /**
     * @var string[]
     */
    public $statusList;
    protected $_name = [
        'customFilters' => 'CustomFilters',
        'eventTypeList' => 'EventTypeList',
        'levelList'     => 'LevelList',
        'nameList'      => 'NameList',
        'product'       => 'Product',
        'statusList'    => 'StatusList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customFilters) {
            $res['CustomFilters'] = $this->customFilters;
        }
        if (null !== $this->eventTypeList) {
            $res['EventTypeList'] = $this->eventTypeList;
        }
        if (null !== $this->levelList) {
            $res['LevelList'] = $this->levelList;
        }
        if (null !== $this->nameList) {
            $res['NameList'] = $this->nameList;
        }
        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }
        if (null !== $this->statusList) {
            $res['StatusList'] = $this->statusList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eventPattern
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomFilters'])) {
            $model->customFilters = $map['CustomFilters'];
        }
        if (isset($map['EventTypeList'])) {
            if (!empty($map['EventTypeList'])) {
                $model->eventTypeList = $map['EventTypeList'];
            }
        }
        if (isset($map['LevelList'])) {
            if (!empty($map['LevelList'])) {
                $model->levelList = $map['LevelList'];
            }
        }
        if (isset($map['NameList'])) {
            if (!empty($map['NameList'])) {
                $model->nameList = $map['NameList'];
            }
        }
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }
        if (isset($map['StatusList'])) {
            if (!empty($map['StatusList'])) {
                $model->statusList = $map['StatusList'];
            }
        }

        return $model;
    }
}
