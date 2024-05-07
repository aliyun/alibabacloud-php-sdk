<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models\ListDepartmentsResponseBody\data;

use AlibabaCloud\SDK\Idrsservice\V20200630\Models\ListDepartmentsResponseBody\data\items\administrators;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var administrators[]
     */
    public $administrators;

    /**
     * @example 2020-07-14T14:01:41.000+08:00
     *
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $description;

    /**
     * @description ID
     *
     * @example 59b0bbfe-929b-4a8c-9833-3ce70b4bad38
     *
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @example 2020-07-14T14:01:41.000+08:00
     *
     * @var string
     */
    public $updatedAt;
    protected $_name = [
        'administrators' => 'Administrators',
        'createdAt'      => 'CreatedAt',
        'description'    => 'Description',
        'id'             => 'Id',
        'name'           => 'Name',
        'updatedAt'      => 'UpdatedAt',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->updatedAt) {
            $res['UpdatedAt'] = $this->updatedAt;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
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
