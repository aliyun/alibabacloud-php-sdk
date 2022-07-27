<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Tea\Model;

class GetParametersRequest extends Model
{
    /**
     * @var string
     */
    public $names;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'names'    => 'Names',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->names) {
            $res['Names'] = $this->names;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetParametersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Names'])) {
            $model->names = $map['Names'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
