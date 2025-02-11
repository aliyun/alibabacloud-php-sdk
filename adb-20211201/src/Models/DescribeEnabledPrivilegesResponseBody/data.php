<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeEnabledPrivilegesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeEnabledPrivilegesResponseBody\data\privileges;

class data extends Model
{
    /**
     * @var string
     */
    public $description;
    /**
     * @var privileges[]
     */
    public $privileges;
    /**
     * @var string
     */
    public $scope;
    protected $_name = [
        'description' => 'Description',
        'privileges'  => 'Privileges',
        'scope'       => 'Scope',
    ];

    public function validate()
    {
        if (\is_array($this->privileges)) {
            Model::validateArray($this->privileges);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->privileges) {
            if (\is_array($this->privileges)) {
                $res['Privileges'] = [];
                $n1                = 0;
                foreach ($this->privileges as $item1) {
                    $res['Privileges'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Privileges'])) {
            if (!empty($map['Privileges'])) {
                $model->privileges = [];
                $n1                = 0;
                foreach ($map['Privileges'] as $item1) {
                    $model->privileges[$n1++] = privileges::fromMap($item1);
                }
            }
        }

        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }

        return $model;
    }
}
