<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models\CreateDataAgentAccuracyTestResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $accuracyTestInsId;
    protected $_name = [
        'accuracyTestInsId' => 'AccuracyTestInsId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accuracyTestInsId) {
            $res['AccuracyTestInsId'] = $this->accuracyTestInsId;
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
        if (isset($map['AccuracyTestInsId'])) {
            $model->accuracyTestInsId = $map['AccuracyTestInsId'];
        }

        return $model;
    }
}
