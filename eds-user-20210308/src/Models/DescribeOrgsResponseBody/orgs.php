<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeOrgsResponseBody;

use AlibabaCloud\Dara\Model;

class orgs extends Model
{
    /**
     * @var string
     */
    public $orgId;

    /**
     * @var string
     */
    public $orgName;

    /**
     * @var string
     */
    public $orgNamePath;

    /**
     * @var string
     */
    public $parentOrgId;
    protected $_name = [
        'orgId' => 'OrgId',
        'orgName' => 'OrgName',
        'orgNamePath' => 'OrgNamePath',
        'parentOrgId' => 'ParentOrgId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->orgId) {
            $res['OrgId'] = $this->orgId;
        }

        if (null !== $this->orgName) {
            $res['OrgName'] = $this->orgName;
        }

        if (null !== $this->orgNamePath) {
            $res['OrgNamePath'] = $this->orgNamePath;
        }

        if (null !== $this->parentOrgId) {
            $res['ParentOrgId'] = $this->parentOrgId;
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
        if (isset($map['OrgId'])) {
            $model->orgId = $map['OrgId'];
        }

        if (isset($map['OrgName'])) {
            $model->orgName = $map['OrgName'];
        }

        if (isset($map['OrgNamePath'])) {
            $model->orgNamePath = $map['OrgNamePath'];
        }

        if (isset($map['ParentOrgId'])) {
            $model->parentOrgId = $map['ParentOrgId'];
        }

        return $model;
    }
}
