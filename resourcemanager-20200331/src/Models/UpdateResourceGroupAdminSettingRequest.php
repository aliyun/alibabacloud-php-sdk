<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Dara\Model;

class UpdateResourceGroupAdminSettingRequest extends Model
{
    /**
     * @var bool
     */
    public $creatorAsAdmin;
    protected $_name = [
        'creatorAsAdmin' => 'CreatorAsAdmin',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->creatorAsAdmin) {
            $res['CreatorAsAdmin'] = $this->creatorAsAdmin;
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
        if (isset($map['CreatorAsAdmin'])) {
            $model->creatorAsAdmin = $map['CreatorAsAdmin'];
        }

        return $model;
    }
}
