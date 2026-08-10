<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Green\V20220926\Models\GetAiAppDetailTopoRequest\timeQuery;

class GetAiAppDetailTopoRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var timeQuery
     */
    public $timeQuery;
    protected $_name = [
        'appId' => 'AppId',
        'regionId' => 'RegionId',
        'timeQuery' => 'TimeQuery',
    ];

    public function validate()
    {
        if (null !== $this->timeQuery) {
            $this->timeQuery->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->timeQuery) {
            $res['TimeQuery'] = null !== $this->timeQuery ? $this->timeQuery->toArray($noStream) : $this->timeQuery;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['TimeQuery'])) {
            $model->timeQuery = timeQuery::fromMap($map['TimeQuery']);
        }

        return $model;
    }
}
