<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListAbacPoliciesResponseBody;

use AlibabaCloud\Dara\Model;

class policyList extends Model
{
    /**
     * @var string
     */
    public $abacPolicyContent;
    /**
     * @var string
     */
    public $abacPolicyDesc;
    /**
     * @var int
     */
    public $abacPolicyId;
    /**
     * @var string
     */
    public $abacPolicyName;
    /**
     * @var string
     */
    public $abacPolicySource;
    /**
     * @var int
     */
    public $creatorId;
    protected $_name = [
        'abacPolicyContent' => 'AbacPolicyContent',
        'abacPolicyDesc'    => 'AbacPolicyDesc',
        'abacPolicyId'      => 'AbacPolicyId',
        'abacPolicyName'    => 'AbacPolicyName',
        'abacPolicySource'  => 'AbacPolicySource',
        'creatorId'         => 'CreatorId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->abacPolicyContent) {
            $res['AbacPolicyContent'] = $this->abacPolicyContent;
        }

        if (null !== $this->abacPolicyDesc) {
            $res['AbacPolicyDesc'] = $this->abacPolicyDesc;
        }

        if (null !== $this->abacPolicyId) {
            $res['AbacPolicyId'] = $this->abacPolicyId;
        }

        if (null !== $this->abacPolicyName) {
            $res['AbacPolicyName'] = $this->abacPolicyName;
        }

        if (null !== $this->abacPolicySource) {
            $res['AbacPolicySource'] = $this->abacPolicySource;
        }

        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
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
        if (isset($map['AbacPolicyContent'])) {
            $model->abacPolicyContent = $map['AbacPolicyContent'];
        }

        if (isset($map['AbacPolicyDesc'])) {
            $model->abacPolicyDesc = $map['AbacPolicyDesc'];
        }

        if (isset($map['AbacPolicyId'])) {
            $model->abacPolicyId = $map['AbacPolicyId'];
        }

        if (isset($map['AbacPolicyName'])) {
            $model->abacPolicyName = $map['AbacPolicyName'];
        }

        if (isset($map['AbacPolicySource'])) {
            $model->abacPolicySource = $map['AbacPolicySource'];
        }

        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }

        return $model;
    }
}
