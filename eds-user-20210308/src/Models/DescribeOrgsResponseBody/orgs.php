<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeOrgsResponseBody;

use AlibabaCloud\Tea\Model;

class orgs extends Model
{
    /**
     * @description The organization ID.
     *
     * @example org-****
     *
     * @var string
     */
    public $orgId;

    /**
     * @description The name of the organizational unit.
     *
     * @example org****
     *
     * @var string
     */
    public $orgName;

    /**
     * @description The parent organization ID.
     *
     * @example org-****
     *
     * @var string
     */
    public $parentOrgId;
    protected $_name = [
        'orgId'       => 'OrgId',
        'orgName'     => 'OrgName',
        'parentOrgId' => 'ParentOrgId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orgId) {
            $res['OrgId'] = $this->orgId;
        }
        if (null !== $this->orgName) {
            $res['OrgName'] = $this->orgName;
        }
        if (null !== $this->parentOrgId) {
            $res['ParentOrgId'] = $this->parentOrgId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return orgs
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
        if (isset($map['ParentOrgId'])) {
            $model->parentOrgId = $map['ParentOrgId'];
        }

        return $model;
    }
}
