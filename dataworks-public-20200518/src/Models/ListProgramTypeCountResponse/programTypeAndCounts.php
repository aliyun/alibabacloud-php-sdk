<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListProgramTypeCountResponse;

use AlibabaCloud\Tea\Model;

class programTypeAndCounts extends Model
{
    /**
     * @var string
     */
    public $programType;

    /**
     * @var int
     */
    public $count;
    protected $_name = [
        'programType' => 'ProgramType',
        'count'       => 'Count',
    ];

    public function validate()
    {
        Model::validateRequired('programType', $this->programType, true);
        Model::validateRequired('count', $this->count, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->programType) {
            $res['ProgramType'] = $this->programType;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return programTypeAndCounts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProgramType'])) {
            $model->programType = $map['ProgramType'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        return $model;
    }
}
