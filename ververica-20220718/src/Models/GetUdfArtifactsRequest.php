<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

class GetUdfArtifactsRequest extends Model
{
    /**
     * @description The name of the JAR or Python file that corresponds to the UDF.
     *
     * @example test-udf
     *
     * @var string
     */
    public $udfArtifactName;
    protected $_name = [
        'udfArtifactName' => 'udfArtifactName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->udfArtifactName) {
            $res['udfArtifactName'] = $this->udfArtifactName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUdfArtifactsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['udfArtifactName'])) {
            $model->udfArtifactName = $map['udfArtifactName'];
        }

        return $model;
    }
}
