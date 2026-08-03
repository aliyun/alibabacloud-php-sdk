<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\ListWorkspacesResponseBody\items\services;

use AlibabaCloud\Dara\Model;

class components extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $cu;

    /**
     * @var bool
     */
    public $deletionProtection;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $componentId;

    /**
     * @var string
     */
    public $componentType;
    protected $_name = [
        'createTime' => 'CreateTime',
        'cu' => 'Cu',
        'deletionProtection' => 'DeletionProtection',
        'status' => 'Status',
        'componentId' => 'componentId',
        'componentType' => 'componentType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->cu) {
            $res['Cu'] = $this->cu;
        }

        if (null !== $this->deletionProtection) {
            $res['DeletionProtection'] = $this->deletionProtection;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->componentId) {
            $res['componentId'] = $this->componentId;
        }

        if (null !== $this->componentType) {
            $res['componentType'] = $this->componentType;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Cu'])) {
            $model->cu = $map['Cu'];
        }

        if (isset($map['DeletionProtection'])) {
            $model->deletionProtection = $map['DeletionProtection'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['componentId'])) {
            $model->componentId = $map['componentId'];
        }

        if (isset($map['componentType'])) {
            $model->componentType = $map['componentType'];
        }

        return $model;
    }
}
