<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengfinplus\V20220913\Models\GetYzdInstanceTaskResultRequest;

use AlibabaCloud\Dara\Model;

class body extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $rangeTimeEndTime;

    /**
     * @var string
     */
    public $rangeTimeStartTime;
    protected $_name = [
        'appId' => 'appId',
        'rangeTimeEndTime' => 'rangeTimeEndTime',
        'rangeTimeStartTime' => 'rangeTimeStartTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['appId'] = $this->appId;
        }

        if (null !== $this->rangeTimeEndTime) {
            $res['rangeTimeEndTime'] = $this->rangeTimeEndTime;
        }

        if (null !== $this->rangeTimeStartTime) {
            $res['rangeTimeStartTime'] = $this->rangeTimeStartTime;
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
        if (isset($map['appId'])) {
            $model->appId = $map['appId'];
        }

        if (isset($map['rangeTimeEndTime'])) {
            $model->rangeTimeEndTime = $map['rangeTimeEndTime'];
        }

        if (isset($map['rangeTimeStartTime'])) {
            $model->rangeTimeStartTime = $map['rangeTimeStartTime'];
        }

        return $model;
    }
}
