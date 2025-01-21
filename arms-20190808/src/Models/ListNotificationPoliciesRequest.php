<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;

class ListNotificationPoliciesRequest extends Model
{
    /**
     * @var bool
     */
    public $directedMode;
    /**
     * @var string
     */
    public $ids;
    /**
     * @var bool
     */
    public $isDetail;
    /**
     * @var string
     */
    public $name;
    /**
     * @var int
     */
    public $page;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var int
     */
    public $size;
    protected $_name = [
        'directedMode' => 'DirectedMode',
        'ids'          => 'Ids',
        'isDetail'     => 'IsDetail',
        'name'         => 'Name',
        'page'         => 'Page',
        'regionId'     => 'RegionId',
        'size'         => 'Size',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->directedMode) {
            $res['DirectedMode'] = $this->directedMode;
        }

        if (null !== $this->ids) {
            $res['Ids'] = $this->ids;
        }

        if (null !== $this->isDetail) {
            $res['IsDetail'] = $this->isDetail;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
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
        if (isset($map['DirectedMode'])) {
            $model->directedMode = $map['DirectedMode'];
        }

        if (isset($map['Ids'])) {
            $model->ids = $map['Ids'];
        }

        if (isset($map['IsDetail'])) {
            $model->isDetail = $map['IsDetail'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        return $model;
    }
}
