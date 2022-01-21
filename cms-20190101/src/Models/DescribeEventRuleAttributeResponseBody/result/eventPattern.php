<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleAttributeResponseBody\result;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleAttributeResponseBody\result\eventPattern\levelList;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleAttributeResponseBody\result\eventPattern\nameList;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleAttributeResponseBody\result\eventPattern\statusList;
use AlibabaCloud\Tea\Model;

class eventPattern extends Model
{
    /**
     * @var levelList
     */
    public $levelList;

    /**
     * @var nameList
     */
    public $nameList;

    /**
     * @var string
     */
    public $product;

    /**
     * @var statusList
     */
    public $statusList;
    protected $_name = [
        'levelList'  => 'LevelList',
        'nameList'   => 'NameList',
        'product'    => 'Product',
        'statusList' => 'StatusList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->levelList) {
            $res['LevelList'] = null !== $this->levelList ? $this->levelList->toMap() : null;
        }
        if (null !== $this->nameList) {
            $res['NameList'] = null !== $this->nameList ? $this->nameList->toMap() : null;
        }
        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }
        if (null !== $this->statusList) {
            $res['StatusList'] = null !== $this->statusList ? $this->statusList->toMap() : null;
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
        if (isset($map['LevelList'])) {
            $model->levelList = levelList::fromMap($map['LevelList']);
        }
        if (isset($map['NameList'])) {
            $model->nameList = nameList::fromMap($map['NameList']);
        }
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }
        if (isset($map['StatusList'])) {
            $model->statusList = statusList::fromMap($map['StatusList']);
        }

        return $model;
    }
}
