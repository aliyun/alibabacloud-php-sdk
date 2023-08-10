<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class ModifyDtsJobNameRequest extends Model
{
    /**
     * @description The ID of the data migration, data synchronization, or change tracking task.
     *
     * @example l3m1213ye7l****
     *
     * @var string
     */
    public $dtsJobId;

    /**
     * @description The new name of the DTS task.
     *
     * >  We recommend that you specify a descriptive name for easy identification. You do not need to use a unique name.
     * @var string
     */
    public $dtsJobName;

    /**
     * @description The ID of the region in which the DTS instance resides. For more information, see [List of supported regions](~~141033~~).
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'dtsJobId'   => 'DtsJobId',
        'dtsJobName' => 'DtsJobName',
        'regionId'   => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dtsJobId) {
            $res['DtsJobId'] = $this->dtsJobId;
        }
        if (null !== $this->dtsJobName) {
            $res['DtsJobName'] = $this->dtsJobName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDtsJobNameRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DtsJobId'])) {
            $model->dtsJobId = $map['DtsJobId'];
        }
        if (isset($map['DtsJobName'])) {
            $model->dtsJobName = $map['DtsJobName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
