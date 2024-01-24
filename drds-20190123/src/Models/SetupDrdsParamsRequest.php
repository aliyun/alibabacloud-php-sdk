<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\SDK\Drds\V20190123\Models\SetupDrdsParamsRequest\data;
use AlibabaCloud\Tea\Model;

class SetupDrdsParamsRequest extends Model
{
    /**
     * @var data[]
     */
    public $data;

    /**
     * @description The ID of the PolarDB-X 1.0 instance for which you want to configure parameters.
     *
     * @example drdsjiii1b49****
     *
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @description The resource for which you want to configure parameters. Valid values:
     *
     *   **INSTANCE**: Configure parameters for the instance.
     *   **DB**: Configure parameters for the databases of the instance.
     *
     * @example DB
     *
     * @var string
     */
    public $paramLevel;

    /**
     * @description The ID of the region in which the PolarDB-X 1.0 instance is located.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'data'           => 'Data',
        'drdsInstanceId' => 'DrdsInstanceId',
        'paramLevel'     => 'ParamLevel',
        'regionId'       => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = [];
            if (null !== $this->data && \is_array($this->data)) {
                $n = 0;
                foreach ($this->data as $item) {
                    $res['Data'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
        }
        if (null !== $this->paramLevel) {
            $res['ParamLevel'] = $this->paramLevel;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetupDrdsParamsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            if (!empty($map['Data'])) {
                $model->data = [];
                $n           = 0;
                foreach ($map['Data'] as $item) {
                    $model->data[$n++] = null !== $item ? data::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DrdsInstanceId'])) {
            $model->drdsInstanceId = $map['DrdsInstanceId'];
        }
        if (isset($map['ParamLevel'])) {
            $model->paramLevel = $map['ParamLevel'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
