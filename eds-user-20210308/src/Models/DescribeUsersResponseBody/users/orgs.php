<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeUsersResponseBody\users;

use AlibabaCloud\Tea\Model;

class orgs extends Model
{
    /**
     * @description The organization ID.
     *
     * @example org-4mdgc1cocc59z****
     *
     * @var string
     */
    public $orgId;

    /**
     * @description The organization name.
     *
     * @example Organization 1
     *
     * @var string
     */
    public $orgName;

    /**
     * @var string
     */
    public $orgNamePath;
    protected $_name = [
        'orgId' => 'OrgId',
        'orgName' => 'OrgName',
        'orgNamePath' => 'OrgNamePath',
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
        if (null !== $this->orgNamePath) {
            $res['OrgNamePath'] = $this->orgNamePath;
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
        if (isset($map['OrgNamePath'])) {
            $model->orgNamePath = $map['OrgNamePath'];
        }

        return $model;
    }
}
