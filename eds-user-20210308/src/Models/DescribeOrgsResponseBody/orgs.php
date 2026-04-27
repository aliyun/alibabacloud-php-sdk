<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeOrgsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeOrgsResponseBody\orgs\resourcePolicyList;

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

    /**
     * @var resourcePolicyList[]
     */
    public $resourcePolicyList;
    protected $_name = [
        'orgId' => 'OrgId',
        'orgName' => 'OrgName',
        'orgNamePath' => 'OrgNamePath',
        'parentOrgId' => 'ParentOrgId',
        'resourcePolicyList' => 'ResourcePolicyList',
    ];

    public function validate()
    {
        if (\is_array($this->resourcePolicyList)) {
            Model::validateArray($this->resourcePolicyList);
        }
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

        if (null !== $this->resourcePolicyList) {
            if (\is_array($this->resourcePolicyList)) {
                $res['ResourcePolicyList'] = [];
                $n1 = 0;
                foreach ($this->resourcePolicyList as $item1) {
                    $res['ResourcePolicyList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['ResourcePolicyList'])) {
            if (!empty($map['ResourcePolicyList'])) {
                $model->resourcePolicyList = [];
                $n1 = 0;
                foreach ($map['ResourcePolicyList'] as $item1) {
                    $model->resourcePolicyList[$n1] = resourcePolicyList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
