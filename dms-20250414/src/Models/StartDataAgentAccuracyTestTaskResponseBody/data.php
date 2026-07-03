<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models\StartDataAgentAccuracyTestTaskResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $accuracyTestTaskId;
    protected $_name = [
        'accuracyTestTaskId' => 'AccuracyTestTaskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accuracyTestTaskId) {
            $res['AccuracyTestTaskId'] = $this->accuracyTestTaskId;
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
        if (isset($map['AccuracyTestTaskId'])) {
            $model->accuracyTestTaskId = $map['AccuracyTestTaskId'];
        }

        return $model;
    }
}
