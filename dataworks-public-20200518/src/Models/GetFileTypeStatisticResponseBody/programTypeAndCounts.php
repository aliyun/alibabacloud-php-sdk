<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetFileTypeStatisticResponseBody;

use AlibabaCloud\Tea\Model;

class programTypeAndCounts extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $count;

    /**
     * @example ODPS_SQL
     *
     * @var string
     */
    public $programType;
    protected $_name = [
        'count'       => 'Count',
        'programType' => 'ProgramType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->programType) {
            $res['ProgramType'] = $this->programType;
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
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['ProgramType'])) {
            $model->programType = $map['ProgramType'];
        }

        return $model;
    }
}
