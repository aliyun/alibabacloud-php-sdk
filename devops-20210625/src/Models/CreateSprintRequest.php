<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Dara\Model;

class CreateSprintRequest extends Model
{
    /**
     * @var string
     */
    public $endDate;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $spaceIdentifier;
    /**
     * @var string[]
     */
    public $staffIds;
    /**
     * @var string
     */
    public $startDate;
    protected $_name = [
        'endDate'         => 'endDate',
        'name'            => 'name',
        'spaceIdentifier' => 'spaceIdentifier',
        'staffIds'        => 'staffIds',
        'startDate'       => 'startDate',
    ];

    public function validate()
    {
        if (\is_array($this->staffIds)) {
            Model::validateArray($this->staffIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endDate) {
            $res['endDate'] = $this->endDate;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->spaceIdentifier) {
            $res['spaceIdentifier'] = $this->spaceIdentifier;
        }

        if (null !== $this->staffIds) {
            if (\is_array($this->staffIds)) {
                $res['staffIds'] = [];
                $n1              = 0;
                foreach ($this->staffIds as $item1) {
                    $res['staffIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->startDate) {
            $res['startDate'] = $this->startDate;
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
        if (isset($map['endDate'])) {
            $model->endDate = $map['endDate'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['spaceIdentifier'])) {
            $model->spaceIdentifier = $map['spaceIdentifier'];
        }

        if (isset($map['staffIds'])) {
            if (!empty($map['staffIds'])) {
                $model->staffIds = [];
                $n1              = 0;
                foreach ($map['staffIds'] as $item1) {
                    $model->staffIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['startDate'])) {
            $model->startDate = $map['startDate'];
        }

        return $model;
    }
}
