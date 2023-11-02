<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models;

use AlibabaCloud\Tea\Model;

class UpdateAutomateResponseConfigStatusRequest extends Model
{
    /**
     * @example [123,345]
     *
     * @var string
     */
    public $ids;

    /**
     * @example true
     *
     * @var bool
     */
    public $inUse;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'ids'      => 'Ids',
        'inUse'    => 'InUse',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ids) {
            $res['Ids'] = $this->ids;
        }
        if (null !== $this->inUse) {
            $res['InUse'] = $this->inUse;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAutomateResponseConfigStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ids'])) {
            $model->ids = $map['Ids'];
        }
        if (isset($map['InUse'])) {
            $model->inUse = $map['InUse'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
