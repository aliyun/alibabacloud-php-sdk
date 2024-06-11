<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Beian\V20160810\Models;

use AlibabaCloud\Tea\Model;

class ListUnbeianIpCheckTypeRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $caller;

    /**
     * @var int
     */
    public $checkType;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var int
     */
    public $limit;

    /**
     * @var int
     */
    public $page;

    /**
     * @var string
     */
    public $remark;
    protected $_name = [
        'caller'    => 'Caller',
        'checkType' => 'CheckType',
        'ip'        => 'Ip',
        'limit'     => 'Limit',
        'page'      => 'Page',
        'remark'    => 'Remark',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->caller) {
            $res['Caller'] = $this->caller;
        }
        if (null !== $this->checkType) {
            $res['CheckType'] = $this->checkType;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUnbeianIpCheckTypeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Caller'])) {
            $model->caller = $map['Caller'];
        }
        if (isset($map['CheckType'])) {
            $model->checkType = $map['CheckType'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        return $model;
    }
}
