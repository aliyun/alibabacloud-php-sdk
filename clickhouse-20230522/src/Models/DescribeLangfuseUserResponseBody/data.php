<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeLangfuseUserResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeLangfuseUserResponseBody\data\memberships;

class data extends Model
{
    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $email;

    /**
     * @var memberships[]
     */
    public $memberships;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $updatedAt;
    protected $_name = [
        'createdAt' => 'CreatedAt',
        'email' => 'Email',
        'memberships' => 'Memberships',
        'name' => 'Name',
        'updatedAt' => 'UpdatedAt',
    ];

    public function validate()
    {
        if (\is_array($this->memberships)) {
            Model::validateArray($this->memberships);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }

        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }

        if (null !== $this->memberships) {
            if (\is_array($this->memberships)) {
                $res['Memberships'] = [];
                $n1 = 0;
                foreach ($this->memberships as $item1) {
                    $res['Memberships'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->updatedAt) {
            $res['UpdatedAt'] = $this->updatedAt;
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
        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }

        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }

        if (isset($map['Memberships'])) {
            if (!empty($map['Memberships'])) {
                $model->memberships = [];
                $n1 = 0;
                foreach ($map['Memberships'] as $item1) {
                    $model->memberships[$n1] = memberships::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['UpdatedAt'])) {
            $model->updatedAt = $map['UpdatedAt'];
        }

        return $model;
    }
}
