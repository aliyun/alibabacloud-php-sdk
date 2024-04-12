<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class TravelStandardListQueryRequest extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $fromGroup;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $ruleName;
    protected $_name = [
        'fromGroup' => 'from_group',
        'pageNo'    => 'page_no',
        'pageSize'  => 'page_size',
        'ruleName'  => 'rule_name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fromGroup) {
            $res['from_group'] = $this->fromGroup;
        }
        if (null !== $this->pageNo) {
            $res['page_no'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['page_size'] = $this->pageSize;
        }
        if (null !== $this->ruleName) {
            $res['rule_name'] = $this->ruleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TravelStandardListQueryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['from_group'])) {
            $model->fromGroup = $map['from_group'];
        }
        if (isset($map['page_no'])) {
            $model->pageNo = $map['page_no'];
        }
        if (isset($map['page_size'])) {
            $model->pageSize = $map['page_size'];
        }
        if (isset($map['rule_name'])) {
            $model->ruleName = $map['rule_name'];
        }

        return $model;
    }
}
