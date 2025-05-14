<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;

class DescribeEdgeMachinesRequest extends Model
{
    /**
     * @var string
     */
    public $hostname;

    /**
     * @var string
     */
    public $lifeState;

    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $onlineState;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'hostname' => 'hostname',
        'lifeState' => 'life_state',
        'model' => 'model',
        'onlineState' => 'online_state',
        'pageNumber' => 'page_number',
        'pageSize' => 'page_size',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hostname) {
            $res['hostname'] = $this->hostname;
        }

        if (null !== $this->lifeState) {
            $res['life_state'] = $this->lifeState;
        }

        if (null !== $this->model) {
            $res['model'] = $this->model;
        }

        if (null !== $this->onlineState) {
            $res['online_state'] = $this->onlineState;
        }

        if (null !== $this->pageNumber) {
            $res['page_number'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['page_size'] = $this->pageSize;
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
        if (isset($map['hostname'])) {
            $model->hostname = $map['hostname'];
        }

        if (isset($map['life_state'])) {
            $model->lifeState = $map['life_state'];
        }

        if (isset($map['model'])) {
            $model->model = $map['model'];
        }

        if (isset($map['online_state'])) {
            $model->onlineState = $map['online_state'];
        }

        if (isset($map['page_number'])) {
            $model->pageNumber = $map['page_number'];
        }

        if (isset($map['page_size'])) {
            $model->pageSize = $map['page_size'];
        }

        return $model;
    }
}
