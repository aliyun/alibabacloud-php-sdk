<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\MLServiceParam;

use AlibabaCloud\Tea\Model;

class model_ extends Model
{
    /**
     * @example xxxx
     *
     * @var string
     */
    public $modelResourceId;

    /**
     * @example xxx_type
     *
     * @var string
     */
    public $modelResourceType;
    protected $_name = [
        'modelResourceId'   => 'modelResourceId',
        'modelResourceType' => 'modelResourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->modelResourceId) {
            $res['modelResourceId'] = $this->modelResourceId;
        }
        if (null !== $this->modelResourceType) {
            $res['modelResourceType'] = $this->modelResourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return model_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['modelResourceId'])) {
            $model->modelResourceId = $map['modelResourceId'];
        }
        if (isset($map['modelResourceType'])) {
            $model->modelResourceType = $map['modelResourceType'];
        }

        return $model;
    }
}
