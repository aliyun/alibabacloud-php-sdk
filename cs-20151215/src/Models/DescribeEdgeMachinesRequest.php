<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DescribeEdgeMachinesRequest extends Model
{
    /**
     * @description The `hostname` of the cloud-native box.
     *
     * @example ack-v-b010-ssdfw****
     *
     * @var string
     */
    public $hostname;

    /**
     * @description The lifecycle status.
     *
     * @example activated/waitOnline/deleting
     *
     * @var string
     */
    public $lifeState;

    /**
     * @description The type of cloud-native box.
     *
     * @example ACK-V-B010
     *
     * @var string
     */
    public $model;

    /**
     * @description The status of the cloud-native box. Valid values:
     *
     *   `offline`
     *   `online`
     *
     * @example offline/online
     *
     * @var string
     */
    public $onlineState;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * @example 10
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
