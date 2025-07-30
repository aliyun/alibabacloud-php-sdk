<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\Tea\Model;

class MoveOrgRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example org-5yy5icj981xe5****
     *
     * @var string
     */
    public $newParentOrgId;

    /**
     * @description This parameter is required.
     *
     * @example org-5yy5icj981xe5****
     *
     * @var string
     */
    public $orgId;
    protected $_name = [
        'newParentOrgId' => 'NewParentOrgId',
        'orgId' => 'OrgId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->newParentOrgId) {
            $res['NewParentOrgId'] = $this->newParentOrgId;
        }
        if (null !== $this->orgId) {
            $res['OrgId'] = $this->orgId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MoveOrgRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NewParentOrgId'])) {
            $model->newParentOrgId = $map['NewParentOrgId'];
        }
        if (isset($map['OrgId'])) {
            $model->orgId = $map['OrgId'];
        }

        return $model;
    }
}
