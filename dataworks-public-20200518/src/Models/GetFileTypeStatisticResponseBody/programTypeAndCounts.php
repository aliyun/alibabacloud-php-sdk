<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetFileTypeStatisticResponseBody;

use AlibabaCloud\Dara\Model;

class programTypeAndCounts extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var string
     */
    public $programType;
    protected $_name = [
        'count' => 'Count',
        'programType' => 'ProgramType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
