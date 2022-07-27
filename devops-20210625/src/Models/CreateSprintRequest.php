<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
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
            $res['staffIds'] = $this->staffIds;
        }
        if (null !== $this->startDate) {
            $res['startDate'] = $this->startDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSprintRequest
     */
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
                $model->staffIds = $map['staffIds'];
            }
        }
        if (isset($map['startDate'])) {
            $model->startDate = $map['startDate'];
        }

        return $model;
    }
}
