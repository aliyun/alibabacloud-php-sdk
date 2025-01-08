<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RAI\V20240701\Models;

use AlibabaCloud\SDK\RAI\V20240701\Models\SyncSensitiveWordRequest\bodyData;
use AlibabaCloud\Tea\Model;

class SyncSensitiveWordRequest extends Model
{
    /**
     * @var bodyData
     */
    public $bodyData;

    /**
     * @example true
     *
     * @var bool
     */
    public $commit;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'bodyData' => 'BodyData',
        'commit'   => 'Commit',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bodyData) {
            $res['BodyData'] = null !== $this->bodyData ? $this->bodyData->toMap() : null;
        }
        if (null !== $this->commit) {
            $res['Commit'] = $this->commit;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SyncSensitiveWordRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BodyData'])) {
            $model->bodyData = bodyData::fromMap($map['BodyData']);
        }
        if (isset($map['Commit'])) {
            $model->commit = $map['Commit'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
