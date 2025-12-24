<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models\VerifyPlaybookResponseBody;

use AlibabaCloud\Dara\Model;

class prerequisites extends Model
{
    /**
     * @var string
     */
    public $prerequisiteType;

    /**
     * @var string
     */
    public $prerequisiteValue;
    protected $_name = [
        'prerequisiteType' => 'PrerequisiteType',
        'prerequisiteValue' => 'PrerequisiteValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->prerequisiteType) {
            $res['PrerequisiteType'] = $this->prerequisiteType;
        }

        if (null !== $this->prerequisiteValue) {
            $res['PrerequisiteValue'] = $this->prerequisiteValue;
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
        if (isset($map['PrerequisiteType'])) {
            $model->prerequisiteType = $map['PrerequisiteType'];
        }

        if (isset($map['PrerequisiteValue'])) {
            $model->prerequisiteValue = $map['PrerequisiteValue'];
        }

        return $model;
    }
}
