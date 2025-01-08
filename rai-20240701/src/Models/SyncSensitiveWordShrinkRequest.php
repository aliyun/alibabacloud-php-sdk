<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RAI\V20240701\Models;

use AlibabaCloud\Tea\Model;

class SyncSensitiveWordShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $bodyDataShrink;

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
        'bodyDataShrink' => 'BodyData',
        'commit'         => 'Commit',
        'regionId'       => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bodyDataShrink) {
            $res['BodyData'] = $this->bodyDataShrink;
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
     * @return SyncSensitiveWordShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BodyData'])) {
            $model->bodyDataShrink = $map['BodyData'];
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
