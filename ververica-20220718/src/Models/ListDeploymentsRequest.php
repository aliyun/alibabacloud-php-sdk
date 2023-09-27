<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

class ListDeploymentsRequest extends Model
{
    /**
     * @var string
     */
    public $executionMode;

    /**
     * @var string
     */
    public $name;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageIndex;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'executionMode' => 'executionMode',
        'name'          => 'name',
        'pageIndex'     => 'pageIndex',
        'pageSize'      => 'pageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->executionMode) {
            $res['executionMode'] = $this->executionMode;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->pageIndex) {
            $res['pageIndex'] = $this->pageIndex;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDeploymentsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['executionMode'])) {
            $model->executionMode = $map['executionMode'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['pageIndex'])) {
            $model->pageIndex = $map['pageIndex'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        return $model;
    }
}
