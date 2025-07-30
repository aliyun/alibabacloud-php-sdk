<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\Tea\Model;

class ModifyOrgRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example org-76joc57khvnhdh***
     *
     * @var string
     */
    public $orgId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $orgName;
    protected $_name = [
        'orgId' => 'OrgId',
        'orgName' => 'OrgName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->orgId) {
            $res['OrgId'] = $this->orgId;
        }
        if (null !== $this->orgName) {
            $res['OrgName'] = $this->orgName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyOrgRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrgId'])) {
            $model->orgId = $map['OrgId'];
        }
        if (isset($map['OrgName'])) {
            $model->orgName = $map['OrgName'];
        }

        return $model;
    }
}
