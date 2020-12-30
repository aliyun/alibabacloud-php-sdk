<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devopsrdc\V20200303\Models;

use AlibabaCloud\Tea\Model;

class BatchInsertMembersRequest extends Model
{
    /**
     * @var string
     */
    public $orgId;

    /**
     * @var string
     */
    public $members;

    /**
     * @var string
     */
    public $realPk;
    protected $_name = [
        'orgId'   => 'OrgId',
        'members' => 'Members',
        'realPk'  => 'RealPk',
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
        if (null !== $this->members) {
            $res['Members'] = $this->members;
        }
        if (null !== $this->realPk) {
            $res['RealPk'] = $this->realPk;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchInsertMembersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrgId'])) {
            $model->orgId = $map['OrgId'];
        }
        if (isset($map['Members'])) {
            $model->members = $map['Members'];
        }
        if (isset($map['RealPk'])) {
            $model->realPk = $map['RealPk'];
        }

        return $model;
    }
}
