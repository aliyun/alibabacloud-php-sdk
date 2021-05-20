<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetRemindResponseBody\data;

use AlibabaCloud\Tea\Model;

class baselines extends Model
{
    /**
     * @var string
     */
    public $baselineName;

    /**
     * @var int
     */
    public $baselineId;
    protected $_name = [
        'baselineName' => 'BaselineName',
        'baselineId'   => 'BaselineId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baselineName) {
            $res['BaselineName'] = $this->baselineName;
        }
        if (null !== $this->baselineId) {
            $res['BaselineId'] = $this->baselineId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return baselines
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaselineName'])) {
            $model->baselineName = $map['BaselineName'];
        }
        if (isset($map['BaselineId'])) {
            $model->baselineId = $map['BaselineId'];
        }

        return $model;
    }
}
