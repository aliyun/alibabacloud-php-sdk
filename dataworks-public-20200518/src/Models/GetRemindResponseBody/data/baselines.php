<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetRemindResponseBody\data;

use AlibabaCloud\Tea\Model;

class baselines extends Model
{
    /**
     * @var int
     */
    public $baselineId;

    /**
     * @var string
     */
    public $baselineName;
    protected $_name = [
        'baselineId'   => 'BaselineId',
        'baselineName' => 'BaselineName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baselineId) {
            $res['BaselineId'] = $this->baselineId;
        }
        if (null !== $this->baselineName) {
            $res['BaselineName'] = $this->baselineName;
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
        if (isset($map['BaselineId'])) {
            $model->baselineId = $map['BaselineId'];
        }
        if (isset($map['BaselineName'])) {
            $model->baselineName = $map['BaselineName'];
        }

        return $model;
    }
}
