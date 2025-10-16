<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeAclCheckResponseBody\checkRecord;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeAclCheckResponseBody\checkRecord\acls\acl;

class acls extends Model
{
    /**
     * @var acl
     */
    public $acl;

    /**
     * @var string
     */
    public $aclAssessmentDetail;

    /**
     * @var string
     */
    public $aclStatus;
    protected $_name = [
        'acl' => 'Acl',
        'aclAssessmentDetail' => 'AclAssessmentDetail',
        'aclStatus' => 'AclStatus',
    ];

    public function validate()
    {
        if (null !== $this->acl) {
            $this->acl->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acl) {
            $res['Acl'] = null !== $this->acl ? $this->acl->toArray($noStream) : $this->acl;
        }

        if (null !== $this->aclAssessmentDetail) {
            $res['AclAssessmentDetail'] = $this->aclAssessmentDetail;
        }

        if (null !== $this->aclStatus) {
            $res['AclStatus'] = $this->aclStatus;
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
        if (isset($map['Acl'])) {
            $model->acl = acl::fromMap($map['Acl']);
        }

        if (isset($map['AclAssessmentDetail'])) {
            $model->aclAssessmentDetail = $map['AclAssessmentDetail'];
        }

        if (isset($map['AclStatus'])) {
            $model->aclStatus = $map['AclStatus'];
        }

        return $model;
    }
}
