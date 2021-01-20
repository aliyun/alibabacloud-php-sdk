<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\PutEventRuleRequest;

use AlibabaCloud\Tea\Model;

class eventPattern extends Model
{
    /**
     * @var string[]
     */
    public $eventTypeList;

    /**
     * @var string[]
     */
    public $statusList;

    /**
     * @var string
     */
    public $product;

    /**
     * @var string[]
     */
    public $levelList;

    /**
     * @var string[]
     */
    public $nameList;
    protected $_name = [
        'eventTypeList' => 'EventTypeList',
        'statusList'    => 'StatusList',
        'product'       => 'Product',
        'levelList'     => 'LevelList',
        'nameList'      => 'NameList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventTypeList) {
            $res['EventTypeList'] = $this->eventTypeList;
        }
        if (null !== $this->statusList) {
            $res['StatusList'] = $this->statusList;
        }
        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }
        if (null !== $this->levelList) {
            $res['LevelList'] = $this->levelList;
        }
        if (null !== $this->nameList) {
            $res['NameList'] = $this->nameList;
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
        if (isset($map['EventTypeList'])) {
            if (!empty($map['EventTypeList'])) {
                $model->eventTypeList = $map['EventTypeList'];
            }
        }
        if (isset($map['StatusList'])) {
            if (!empty($map['StatusList'])) {
                $model->statusList = $map['StatusList'];
            }
        }
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
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

        return $model;
    }
}
