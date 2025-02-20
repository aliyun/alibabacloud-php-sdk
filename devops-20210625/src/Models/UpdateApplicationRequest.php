<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Dara\Model;

class UpdateApplicationRequest extends Model
{
    /**
     * @var string
     */
    public $ownerAccountId;
    /**
     * @var string
     */
    public $organizationId;
    protected $_name = [
        'ownerAccountId' => 'ownerAccountId',
        'organizationId' => 'organizationId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ownerAccountId) {
            $res['ownerAccountId'] = $this->ownerAccountId;
        }

        if (null !== $this->organizationId) {
            $res['organizationId'] = $this->organizationId;
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
        if (isset($map['ownerAccountId'])) {
            $model->ownerAccountId = $map['ownerAccountId'];
        }

        if (isset($map['organizationId'])) {
            $model->organizationId = $map['organizationId'];
        }

        return $model;
    }
}
