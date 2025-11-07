<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\ListGitAccountsResponseBody;

use AlibabaCloud\Dara\Model;

class gitAccounts extends Model
{
    /**
     * @var bool
     */
    public $isActive;

    /**
     * @var string
     */
    public $owner;
    protected $_name = [
        'isActive' => 'IsActive',
        'owner' => 'Owner',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isActive) {
            $res['IsActive'] = $this->isActive;
        }

        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
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
        if (isset($map['IsActive'])) {
            $model->isActive = $map['IsActive'];
        }

        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }

        return $model;
    }
}
