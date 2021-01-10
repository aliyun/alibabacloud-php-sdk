<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\ListThingModelVersionResponseBody\data;

use AlibabaCloud\Tea\Model;

class modelVersions extends Model
{
    /**
     * @var string
     */
    public $modelVersion;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $gmtCreate;
    protected $_name = [
        'modelVersion' => 'ModelVersion',
        'description'  => 'Description',
        'gmtCreate'    => 'GmtCreate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->modelVersion) {
            $res['ModelVersion'] = $this->modelVersion;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
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
        if (isset($map['ModelVersion'])) {
            $model->modelVersion = $map['ModelVersion'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        return $model;
    }
}
