<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20210501\Models;

use AlibabaCloud\Tea\Model;

class GetProductInfoByIdsRequest extends Model
{
    /**
     * @var string
     */
    public $fields;

    /**
     * @var string
     */
    public $itemIds;

    /**
     * @var string
     */
    public $pid;
    protected $_name = [
        'fields'  => 'Fields',
        'itemIds' => 'ItemIds',
        'pid'     => 'Pid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fields) {
            $res['Fields'] = $this->fields;
        }
        if (null !== $this->itemIds) {
            $res['ItemIds'] = $this->itemIds;
        }
        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetProductInfoByIdsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Fields'])) {
            $model->fields = $map['Fields'];
        }
        if (isset($map['ItemIds'])) {
            $model->itemIds = $map['ItemIds'];
        }
        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }

        return $model;
    }
}
