<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;

class GrafanaWorkspaceUserOrg extends Model
{
    /**
     * @var int
     */
    public $orgId;

    /**
     * @var string
     */
    public $orgName;

    /**
     * @var string
     */
    public $role;
    protected $_name = [
        'orgId' => 'orgId',
        'orgName' => 'orgName',
        'role' => 'role',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->orgId) {
            $res['orgId'] = $this->orgId;
        }

        if (null !== $this->orgName) {
            $res['orgName'] = $this->orgName;
        }

        if (null !== $this->role) {
            $res['role'] = $this->role;
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
        if (isset($map['orgId'])) {
            $model->orgId = $map['orgId'];
        }

        if (isset($map['orgName'])) {
            $model->orgName = $map['orgName'];
        }

        if (isset($map['role'])) {
            $model->role = $map['role'];
        }

        return $model;
    }
}
