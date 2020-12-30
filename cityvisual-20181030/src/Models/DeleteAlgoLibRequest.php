<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cityvisual\V20181030\Models;

use AlibabaCloud\Tea\Model;

class DeleteAlgoLibRequest extends Model
{
    /**
     * @var string
     */
    public $algoLibId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'algoLibId' => 'AlgoLibId',
        'regionId'  => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->algoLibId) {
            $res['AlgoLibId'] = $this->algoLibId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteAlgoLibRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlgoLibId'])) {
            $model->algoLibId = $map['AlgoLibId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
