<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class PutAnnotationDataRequest extends Model
{
    /**
     * @var string
     */
    public $annotationdataId;

    /**
     * @var MLDataParam
     */
    public $mlDataParam;

    /**
     * @var string[][]
     */
    public $rawLog;
    protected $_name = [
        'annotationdataId' => 'annotationdataId',
        'mlDataParam'      => 'mlDataParam',
        'rawLog'           => 'rawLog',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->annotationdataId) {
            $res['annotationdataId'] = $this->annotationdataId;
        }
        if (null !== $this->mlDataParam) {
            $res['mlDataParam'] = null !== $this->mlDataParam ? $this->mlDataParam->toMap() : null;
        }
        if (null !== $this->rawLog) {
            $res['rawLog'] = $this->rawLog;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutAnnotationDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['annotationdataId'])) {
            $model->annotationdataId = $map['annotationdataId'];
        }
        if (isset($map['mlDataParam'])) {
            $model->mlDataParam = MLDataParam::fromMap($map['mlDataParam']);
        }
        if (isset($map['rawLog'])) {
            if (!empty($map['rawLog'])) {
                $model->rawLog = $map['rawLog'];
            }
        }

        return $model;
    }
}
