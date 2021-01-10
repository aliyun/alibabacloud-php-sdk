<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models\ListDepartmentsResponseBody\data;

use AlibabaCloud\SDK\Idrsservice\V20200630\Models\ListDepartmentsResponseBody\data\items\administrators;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var administrators[]
     */
    public $administrators;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $updatedAt;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'description'    => 'Description',
        'administrators' => 'Administrators',
        'createdAt'      => 'CreatedAt',
        'updatedAt'      => 'UpdatedAt',
        'name'           => 'Name',
        'id'             => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->administrators) {
            $res['Administrators'] = [];
            if (null !== $this->administrators && \is_array($this->administrators)) {
                $n = 0;
                foreach ($this->administrators as $item) {
                    $res['Administrators'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }
        if (null !== $this->updatedAt) {
            $res['UpdatedAt'] = $this->updatedAt;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Administrators'])) {
            if (!empty($map['Administrators'])) {
                $model->administrators = [];
                $n                     = 0;
                foreach ($map['Administrators'] as $item) {
                    $model->administrators[$n++] = null !== $item ? administrators::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }
        if (isset($map['UpdatedAt'])) {
            $model->updatedAt = $map['UpdatedAt'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
