<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\MLServiceParam;

use AlibabaCloud\Dara\Model;

class model_ extends Model
{
    /**
     * @var string
     */
    public $modelResourceId;

    /**
     * @var string
     */
    public $modelResourceType;
    protected $_name = [
        'modelResourceId' => 'modelResourceId',
        'modelResourceType' => 'modelResourceType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
