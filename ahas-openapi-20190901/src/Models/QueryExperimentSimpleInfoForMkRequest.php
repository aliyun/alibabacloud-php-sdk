<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ahasopenapi\V20190901\Models;

use AlibabaCloud\Tea\Model;

class QueryExperimentSimpleInfoForMkRequest extends Model
{
    /**
     * @var string
     */
    public $experimentId;

    /**
     * @var string
     */
    public $namespace;
    protected $_name = [
        'experimentId' => 'ExperimentId',
        'namespace'    => 'Namespace',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->experimentId) {
            $res['ExperimentId'] = $this->experimentId;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryExperimentSimpleInfoForMkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExperimentId'])) {
            $model->experimentId = $map['ExperimentId'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        return $model;
    }
}
