<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class GetDataServiceApiTestRequest extends Model
{
    /**
     * @var int
     */
    public $testId;
    protected $_name = [
        'testId' => 'TestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->testId) {
            $res['TestId'] = $this->testId;
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
        if (isset($map['TestId'])) {
            $model->testId = $map['TestId'];
        }

        return $model;
    }
}
