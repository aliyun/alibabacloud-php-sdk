<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\SearchFormDataSecondGenerationNoTableFieldResponseBody\data;

use AlibabaCloud\SDK\Aliding\V20230426\Models\SearchFormDataSecondGenerationNoTableFieldResponseBody\data\modifyUser\name;
use AlibabaCloud\Tea\Model;

class modifyUser extends Model
{
    /**
     * @var name
     */
    public $name;

    /**
     * @example 012345
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'name'   => 'Name',
        'userId' => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = null !== $this->name ? $this->name->toMap() : null;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return modifyUser
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = name::fromMap($map['Name']);
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
