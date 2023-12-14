<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models;

use AlibabaCloud\Tea\Model;

class UpdateAutomateResponseConfigStatusRequest extends Model
{
    /**
     * @description The IDs of the automatic response rules. The value is a JSON array.
     *
     * @example [123,345]
     *
     * @var string
     */
    public $ids;

    /**
     * @description Specifies whether the rule is enabled. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $inUse;

    /**
     * @description The data management center of the threat analysis feature. Specify this parameter based on the region in which your assets reside. Valid values:
     *
     *   cn-hangzhou: Your assets reside in regions inside China.
     *   ap-southeast-1: Your assets reside in regions outside China.
     *
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
