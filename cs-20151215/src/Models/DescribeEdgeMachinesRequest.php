<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DescribeEdgeMachinesRequest extends Model
{
    /**
     * @description host name
     *
     * @var string
     */
    public $hostname;

    /**
     * @description life state
     *
     * @var string
     */
    public $lifeState;

    /**
     * @description model
     *
     * @var string
     */
    public $model;

    /**
     * @description online state
     *
     * @var string
     */
    public $onlineState;

    /**
     * @description page number
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description page size
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'hostname'    => 'hostname',
        'lifeState'   => 'life_state',
        'model'       => 'model',
        'onlineState' => 'online_state',
        'pageNumber'  => 'page_number',
        'pageSize'    => 'page_size',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return DescribeEdgeMachinesRequest
     */
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
