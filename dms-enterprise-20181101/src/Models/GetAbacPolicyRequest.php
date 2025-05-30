<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;

class GetAbacPolicyRequest extends Model
{
    /**
     * @var int
     */
    public $abacPolicyId;

    /**
     * @var string
     */
    public $abacPolicyName;

    /**
     * @var int
     */
    public $tid;
    protected $_name = [
        'abacPolicyId' => 'AbacPolicyId',
        'abacPolicyName' => 'AbacPolicyName',
        'tid' => 'Tid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->abacPolicyId) {
            $res['AbacPolicyId'] = $this->abacPolicyId;
        }

        if (null !== $this->abacPolicyName) {
            $res['AbacPolicyName'] = $this->abacPolicyName;
        }

        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
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
        if (isset($map['AbacPolicyId'])) {
            $model->abacPolicyId = $map['AbacPolicyId'];
        }

        if (isset($map['AbacPolicyName'])) {
            $model->abacPolicyName = $map['AbacPolicyName'];
        }

        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
