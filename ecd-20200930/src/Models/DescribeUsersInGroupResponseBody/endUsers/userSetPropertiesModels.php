<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeUsersInGroupResponseBody\endUsers;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeUsersInGroupResponseBody\endUsers\userSetPropertiesModels\propertyValues;

class userSetPropertiesModels extends Model
{
    /**
     * @var int
     */
    public $propertyId;
    /**
     * @var string
     */
    public $propertyKey;
    /**
     * @var int
     */
    public $propertyType;
    /**
     * @var propertyValues[]
     */
    public $propertyValues;
    /**
     * @var int
     */
    public $userId;
    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'propertyId'     => 'PropertyId',
        'propertyKey'    => 'PropertyKey',
        'propertyType'   => 'PropertyType',
        'propertyValues' => 'PropertyValues',
        'userId'         => 'UserId',
        'userName'       => 'UserName',
    ];

    public function validate()
    {
        if (\is_array($this->propertyValues)) {
            Model::validateArray($this->propertyValues);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->propertyId) {
            $res['PropertyId'] = $this->propertyId;
        }

        if (null !== $this->propertyKey) {
            $res['PropertyKey'] = $this->propertyKey;
        }

        if (null !== $this->propertyType) {
            $res['PropertyType'] = $this->propertyType;
        }

        if (null !== $this->propertyValues) {
            if (\is_array($this->propertyValues)) {
                $res['PropertyValues'] = [];
                $n1                    = 0;
                foreach ($this->propertyValues as $item1) {
                    $res['PropertyValues'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
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
        if (isset($map['PropertyId'])) {
            $model->propertyId = $map['PropertyId'];
        }

        if (isset($map['PropertyKey'])) {
            $model->propertyKey = $map['PropertyKey'];
        }

        if (isset($map['PropertyType'])) {
            $model->propertyType = $map['PropertyType'];
        }

        if (isset($map['PropertyValues'])) {
            if (!empty($map['PropertyValues'])) {
                $model->propertyValues = [];
                $n1                    = 0;
                foreach ($map['PropertyValues'] as $item1) {
                    $model->propertyValues[$n1++] = propertyValues::fromMap($item1);
                }
            }
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
