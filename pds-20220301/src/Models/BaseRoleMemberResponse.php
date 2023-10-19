<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class BaseRoleMemberResponse extends Model
{
    /**
     * @var BaseAssignmentResponse[]
     */
    public $assignmentList;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $domainId;

    /**
     * @var Identity
     */
    public $identity;

    /**
     * @var string
     */
    public $identityName;

    /**
     * @var bool
     */
    public $isAdmin;

    /**
     * @var string
     */
    public $subdomainId;
    protected $_name = [
        'assignmentList' => 'assignment_list',
        'createdAt'      => 'created_at',
        'creator'        => 'creator',
        'domainId'       => 'domain_id',
        'identity'       => 'identity',
        'identityName'   => 'identity_name',
        'isAdmin'        => 'is_admin',
        'subdomainId'    => 'subdomain_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assignmentList) {
            $res['assignment_list'] = [];
            if (null !== $this->assignmentList && \is_array($this->assignmentList)) {
                $n = 0;
                foreach ($this->assignmentList as $item) {
                    $res['assignment_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->createdAt) {
            $res['created_at'] = $this->createdAt;
        }
        if (null !== $this->creator) {
            $res['creator'] = $this->creator;
        }
        if (null !== $this->domainId) {
            $res['domain_id'] = $this->domainId;
        }
        if (null !== $this->identity) {
            $res['identity'] = null !== $this->identity ? $this->identity->toMap() : null;
        }
        if (null !== $this->identityName) {
            $res['identity_name'] = $this->identityName;
        }
        if (null !== $this->isAdmin) {
            $res['is_admin'] = $this->isAdmin;
        }
        if (null !== $this->subdomainId) {
            $res['subdomain_id'] = $this->subdomainId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BaseRoleMemberResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['assignment_list'])) {
            if (!empty($map['assignment_list'])) {
                $model->assignmentList = [];
                $n                     = 0;
                foreach ($map['assignment_list'] as $item) {
                    $model->assignmentList[$n++] = null !== $item ? BaseAssignmentResponse::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['created_at'])) {
            $model->createdAt = $map['created_at'];
        }
        if (isset($map['creator'])) {
            $model->creator = $map['creator'];
        }
        if (isset($map['domain_id'])) {
            $model->domainId = $map['domain_id'];
        }
        if (isset($map['identity'])) {
            $model->identity = Identity::fromMap($map['identity']);
        }
        if (isset($map['identity_name'])) {
            $model->identityName = $map['identity_name'];
        }
        if (isset($map['is_admin'])) {
            $model->isAdmin = $map['is_admin'];
        }
        if (isset($map['subdomain_id'])) {
            $model->subdomainId = $map['subdomain_id'];
        }

        return $model;
    }
}
