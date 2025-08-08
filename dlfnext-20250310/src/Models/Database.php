<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Dara\Model;

class Database extends Model
{
    /**
     * @var int
     */
    public $createdAt;

    /**
     * @var string
     */
    public $createdBy;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $location;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $options;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var int
     */
    public $updatedAt;

    /**
     * @var string
     */
    public $updatedBy;
    protected $_name = [
        'createdAt' => 'createdAt',
        'createdBy' => 'createdBy',
        'id' => 'id',
        'location' => 'location',
        'name' => 'name',
        'options' => 'options',
        'owner' => 'owner',
        'updatedAt' => 'updatedAt',
        'updatedBy' => 'updatedBy',
    ];

    public function validate()
    {
        if (\is_array($this->options)) {
            Model::validateArray($this->options);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->createdBy) {
            $res['createdBy'] = $this->createdBy;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->location) {
            $res['location'] = $this->location;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->options) {
            if (\is_array($this->options)) {
                $res['options'] = [];
                foreach ($this->options as $key1 => $value1) {
                    $res['options'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->owner) {
            $res['owner'] = $this->owner;
        }

        if (null !== $this->updatedAt) {
            $res['updatedAt'] = $this->updatedAt;
        }

        if (null !== $this->updatedBy) {
            $res['updatedBy'] = $this->updatedBy;
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
        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['createdBy'])) {
            $model->createdBy = $map['createdBy'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['location'])) {
            $model->location = $map['location'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['options'])) {
            if (!empty($map['options'])) {
                $model->options = [];
                foreach ($map['options'] as $key1 => $value1) {
                    $model->options[$key1] = $value1;
                }
            }
        }

        if (isset($map['owner'])) {
            $model->owner = $map['owner'];
        }

        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }

        if (isset($map['updatedBy'])) {
            $model->updatedBy = $map['updatedBy'];
        }

        return $model;
    }
}
