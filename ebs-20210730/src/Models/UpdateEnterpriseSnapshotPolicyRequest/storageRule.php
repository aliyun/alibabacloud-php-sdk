<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models\UpdateEnterpriseSnapshotPolicyRequest;

use AlibabaCloud\Dara\Model;

class storageRule extends Model
{
    /**
     * @var bool
     */
    public $enableImmediateAccess;
    protected $_name = [
        'enableImmediateAccess' => 'EnableImmediateAccess',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enableImmediateAccess) {
            $res['EnableImmediateAccess'] = $this->enableImmediateAccess;
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
        if (isset($map['EnableImmediateAccess'])) {
            $model->enableImmediateAccess = $map['EnableImmediateAccess'];
        }

        return $model;
    }
}
