<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetOrgAndFactoryResponseBody\data;

use AlibabaCloud\Tea\Model;

class factoryList extends Model
{
    /**
     * @example pn_95
     *
     * @var string
     */
    public $factoryId;

    /**
     * @var string
     */
    public $factoryName;
    protected $_name = [
        'factoryId'   => 'factoryId',
        'factoryName' => 'factoryName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->factoryId) {
            $res['factoryId'] = $this->factoryId;
        }
        if (null !== $this->factoryName) {
            $res['factoryName'] = $this->factoryName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return factoryList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['factoryId'])) {
            $model->factoryId = $map['factoryId'];
        }
        if (isset($map['factoryName'])) {
            $model->factoryName = $map['factoryName'];
        }

        return $model;
    }
}
