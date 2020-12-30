<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rdc\V20180821\Models;

use AlibabaCloud\Tea\Model;

class AddRamMemberRequest extends Model
{
    /**
     * @var string
     */
    public $corpIdentifier;

    /**
     * @var string
     */
    public $staffIdentifier;
    protected $_name = [
        'corpIdentifier'  => 'CorpIdentifier',
        'staffIdentifier' => 'StaffIdentifier',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->corpIdentifier) {
            $res['CorpIdentifier'] = $this->corpIdentifier;
        }
        if (null !== $this->staffIdentifier) {
            $res['StaffIdentifier'] = $this->staffIdentifier;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddRamMemberRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CorpIdentifier'])) {
            $model->corpIdentifier = $map['CorpIdentifier'];
        }
        if (isset($map['StaffIdentifier'])) {
            $model->staffIdentifier = $map['StaffIdentifier'];
        }

        return $model;
    }
}
