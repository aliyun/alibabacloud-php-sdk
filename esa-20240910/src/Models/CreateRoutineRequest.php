<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class CreateRoutineRequest extends Model
{
    /**
     * @description The routine description.
     *
     * @example the description of this routine
     *
     * @var string
     */
    public $description;

    /**
     * @description The routine name, which must be unique in the same account.
     *
     * @example test-routine1
     *
     * @var string
     */
    public $name;

    /**
     * @description The specification of the routine.
     *
     * @example 5ms
     *
     * @var string
     */
    public $specName;
    protected $_name = [
        'description' => 'Description',
        'name'        => 'Name',
        'specName'    => 'SpecName',
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->specName) {
            $res['SpecName'] = $this->specName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRoutineRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SpecName'])) {
            $model->specName = $map['SpecName'];
        }

        return $model;
    }
}
