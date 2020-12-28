<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ahasopenapi\V20190901\Models;

use AlibabaCloud\Tea\Model;

class GetExperimentMetaRequest extends Model
{
    /**
     * @var string
     */
    public $experimentId;

    /**
     * @var string
     */
    public $nameSpace;
    protected $_name = [
        'experimentId' => 'ExperimentId',
        'nameSpace'    => 'NameSpace',
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
        if (null !== $this->nameSpace) {
            $res['NameSpace'] = $this->nameSpace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetExperimentMetaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExperimentId'])) {
            $model->experimentId = $map['ExperimentId'];
        }
        if (isset($map['NameSpace'])) {
            $model->nameSpace = $map['NameSpace'];
        }

        return $model;
    }
}
