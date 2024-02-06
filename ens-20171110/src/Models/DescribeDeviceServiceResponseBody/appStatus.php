<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDeviceServiceResponseBody;

use AlibabaCloud\Tea\Model;

class appStatus extends Model
{
    /**
     * @description The status of the application. The value is of the enumeration type. Valid values:
     *
     * Three intermediate states:
     *
     *   CREATING
     *   UPDATING
     *   DELETING
     *
     * Four final states:
     *
     *   CREATE_FAILED
     *   UPDATE_FAILED
     *   DELETE_FAILED
     *   RUNNING
     *
     * @example CREATING
     *
     * @var string
     */
    public $phase;

    /**
     * @description The description of the application status.
     *
     * @var string
     */
    public $statusDescrip;

    /**
     * @description The time when the status was last updated.
     *
     * @example 2021-01-26T05:04Z
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'phase'         => 'Phase',
        'statusDescrip' => 'StatusDescrip',
        'updateTime'    => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->phase) {
            $res['Phase'] = $this->phase;
        }
        if (null !== $this->statusDescrip) {
            $res['StatusDescrip'] = $this->statusDescrip;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return appStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Phase'])) {
            $model->phase = $map['Phase'];
        }
        if (isset($map['StatusDescrip'])) {
            $model->statusDescrip = $map['StatusDescrip'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
