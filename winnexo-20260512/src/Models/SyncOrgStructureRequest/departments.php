<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\SyncOrgStructureRequest;

use AlibabaCloud\Dara\Model;

class departments extends Model
{
    /**
     * @var string
     */
    public $deptId;

    /**
     * @var string
     */
    public $deptName;

    /**
     * @var int
     */
    public $order;

    /**
     * @var string
     */
    public $parentDeptId;
    protected $_name = [
        'deptId' => 'deptId',
        'deptName' => 'deptName',
        'order' => 'order',
        'parentDeptId' => 'parentDeptId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deptId) {
            $res['deptId'] = $this->deptId;
        }

        if (null !== $this->deptName) {
            $res['deptName'] = $this->deptName;
        }

        if (null !== $this->order) {
            $res['order'] = $this->order;
        }

        if (null !== $this->parentDeptId) {
            $res['parentDeptId'] = $this->parentDeptId;
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
        if (isset($map['deptId'])) {
            $model->deptId = $map['deptId'];
        }

        if (isset($map['deptName'])) {
            $model->deptName = $map['deptName'];
        }

        if (isset($map['order'])) {
            $model->order = $map['order'];
        }

        if (isset($map['parentDeptId'])) {
            $model->parentDeptId = $map['parentDeptId'];
        }

        return $model;
    }
}
