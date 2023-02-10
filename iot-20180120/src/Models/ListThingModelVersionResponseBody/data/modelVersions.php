<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\ListThingModelVersionResponseBody\data;

use AlibabaCloud\Tea\Model;

class modelVersions extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @example 1579235657535
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @example V1.0.0
     *
     * @var string
     */
    public $modelVersion;
    protected $_name = [
        'description'  => 'Description',
        'gmtCreate'    => 'GmtCreate',
        'modelVersion' => 'ModelVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->modelVersion) {
            $res['ModelVersion'] = $this->modelVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return modelVersions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['ModelVersion'])) {
            $model->modelVersion = $map['ModelVersion'];
        }

        return $model;
    }
}
