<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eais\V20190624\Models;

use AlibabaCloud\Tea\Model;

class DeleteEaisEiRequest extends Model
{
    /**
     * @example eais-hzu00xufs1c8j5nn****
     *
     * @var string
     */
    public $eiInstanceId;

    /**
     * @example false
     *
     * @var bool
     */
    public $force;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'eiInstanceId' => 'EiInstanceId',
        'force'        => 'Force',
        'regionId'     => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eiInstanceId) {
            $res['EiInstanceId'] = $this->eiInstanceId;
        }
        if (null !== $this->force) {
            $res['Force'] = $this->force;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteEaisEiRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EiInstanceId'])) {
            $model->eiInstanceId = $map['EiInstanceId'];
        }
        if (isset($map['Force'])) {
            $model->force = $map['Force'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
