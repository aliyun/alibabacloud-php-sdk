<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ahasopenapi\V20190901\Models;

use AlibabaCloud\Tea\Model;

class QueryExperimentTaskIdByExpIdRequest extends Model
{
    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $expId;

    /**
     * @var string
     */
    public $ahasRegionId;
    protected $_name = [
        'namespace'    => 'Namespace',
        'expId'        => 'ExpId',
        'ahasRegionId' => 'AhasRegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->expId) {
            $res['ExpId'] = $this->expId;
        }
        if (null !== $this->ahasRegionId) {
            $res['AhasRegionId'] = $this->ahasRegionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryExperimentTaskIdByExpIdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['ExpId'])) {
            $model->expId = $map['ExpId'];
        }
        if (isset($map['AhasRegionId'])) {
            $model->ahasRegionId = $map['AhasRegionId'];
        }

        return $model;
    }
}
