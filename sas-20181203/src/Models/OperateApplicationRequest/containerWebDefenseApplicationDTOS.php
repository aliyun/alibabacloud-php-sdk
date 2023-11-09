<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\OperateApplicationRequest;

use AlibabaCloud\Tea\Model;

class containerWebDefenseApplicationDTOS extends Model
{
    /**
     * @example ceb68cc58234141828677e383bd21ff0c
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example add
     *
     * @var string
     */
    public $flag;

    /**
     * @example 196
     *
     * @var int
     */
    public $id;

    /**
     * @example app:app-003
     *
     * @var string
     */
    public $tag;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'flag'      => 'Flag',
        'id'        => 'Id',
        'tag'       => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->flag) {
            $res['Flag'] = $this->flag;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return containerWebDefenseApplicationDTOS
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Flag'])) {
            $model->flag = $map['Flag'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }

        return $model;
    }
}
