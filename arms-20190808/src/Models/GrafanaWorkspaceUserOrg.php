<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class GrafanaWorkspaceUserOrg extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $orgId;

    /**
     * @example main org
     *
     * @var string
     */
    public $orgName;

    /**
     * @example admin
     *
     * @var string
     */
    public $role;
    protected $_name = [
        'orgId'   => 'orgId',
        'orgName' => 'orgName',
        'role'    => 'role',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return GrafanaWorkspaceUserOrg
     */
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
