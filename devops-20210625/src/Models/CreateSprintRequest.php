<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class CreateSprintRequest extends Model
{
    /**
     * @example 2021-12-02
     *
     * @var string
     */
    public $endDate;

    /**
     * @description This parameter is required.
     *
     * @example xxx
     *
     * @var string
     */
    public $name;

    /**
     * @description This parameter is required.
     *
     * @example asd345xxxxx9q9845xxxxx34
     *
     * @var string
     */
    public $spaceIdentifier;

    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $staffIds;

    /**
     * @example 2021-12-01
     *
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
