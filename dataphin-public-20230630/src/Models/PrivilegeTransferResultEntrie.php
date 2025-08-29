<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;

class PrivilegeTransferResultEntrie extends Model
{
    /**
     * @var PrivilegeTransferResultEntrie[]
     */
    public $children;

    /**
     * @var string
     */
    public $errMsg;

    /**
     * @var bool
     */
    public $isLeaf;

    /**
     * @var string
     */
    public $privilege;

    /**
     * @var string
     */
    public $privilegeDisplayName;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $test;
    protected $_name = [
        'children' => 'Children',
        'errMsg' => 'ErrMsg',
        'isLeaf' => 'IsLeaf',
        'privilege' => 'Privilege',
        'privilegeDisplayName' => 'PrivilegeDisplayName',
        'status' => 'Status',
        'test' => 'Test',
    ];

    public function validate()
    {
        if (\is_array($this->children)) {
            Model::validateArray($this->children);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->children) {
            if (\is_array($this->children)) {
                $res['Children'] = [];
                $n1 = 0;
                foreach ($this->children as $item1) {
                    $res['Children'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->errMsg) {
            $res['ErrMsg'] = $this->errMsg;
        }

        if (null !== $this->isLeaf) {
            $res['IsLeaf'] = $this->isLeaf;
        }

        if (null !== $this->privilege) {
            $res['Privilege'] = $this->privilege;
        }

        if (null !== $this->privilegeDisplayName) {
            $res['PrivilegeDisplayName'] = $this->privilegeDisplayName;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->test) {
            $res['Test'] = $this->test;
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
        if (isset($map['Children'])) {
            if (!empty($map['Children'])) {
                $model->children = [];
                $n1 = 0;
                foreach ($map['Children'] as $item1) {
                    $model->children[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ErrMsg'])) {
            $model->errMsg = $map['ErrMsg'];
        }

        if (isset($map['IsLeaf'])) {
            $model->isLeaf = $map['IsLeaf'];
        }

        if (isset($map['Privilege'])) {
            $model->privilege = $map['Privilege'];
        }

        if (isset($map['PrivilegeDisplayName'])) {
            $model->privilegeDisplayName = $map['PrivilegeDisplayName'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Test'])) {
            $model->test = $map['Test'];
        }

        return $model;
    }
}
