<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListDoNotCallNumbersResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @example 1626962425000
     *
     * @var int
     */
    public $createTime;

    /**
     * @example agent
     *
     * @var string
     */
    public $creator;

    /**
     * @example 1900000****
     *
     * @var string
     */
    public $number;

    /**
     * @var string
     */
    public $remark;

    /**
     * @example INSTANCE
     *
     * @var string
     */
    public $scope;
    protected $_name = [
        'createTime' => 'CreateTime',
        'creator'    => 'Creator',
        'number'     => 'Number',
        'remark'     => 'Remark',
        'scope'      => 'Scope',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->number) {
            $res['Number'] = $this->number;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }

        return $model;
    }
}
