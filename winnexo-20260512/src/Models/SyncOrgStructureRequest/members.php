<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\SyncOrgStructureRequest;

use AlibabaCloud\Dara\Model;

class members extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $deptId;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'accountId' => 'accountId',
        'deptId' => 'deptId',
        'name' => 'name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['accountId'] = $this->accountId;
        }

        if (null !== $this->deptId) {
            $res['deptId'] = $this->deptId;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
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
        if (isset($map['accountId'])) {
            $model->accountId = $map['accountId'];
        }

        if (isset($map['deptId'])) {
            $model->deptId = $map['deptId'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
