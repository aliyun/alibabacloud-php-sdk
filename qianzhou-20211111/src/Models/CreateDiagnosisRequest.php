<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qianzhou\V20211111\Models;

use AlibabaCloud\Tea\Model;

class CreateDiagnosisRequest extends Model
{
    /**
     * @var string
     */
    public $body;

    /**
     * @var string
     */
    public $clusterID;

    /**
     * @var string
     */
    public $diagnosisType;
    protected $_name = [
        'body'          => 'body',
        'clusterID'     => 'clusterID',
        'diagnosisType' => 'diagnosisType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->body) {
            $res['body'] = $this->body;
        }
        if (null !== $this->clusterID) {
            $res['clusterID'] = $this->clusterID;
        }
        if (null !== $this->diagnosisType) {
            $res['diagnosisType'] = $this->diagnosisType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDiagnosisRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['body'])) {
            $model->body = $map['body'];
        }
        if (isset($map['clusterID'])) {
            $model->clusterID = $map['clusterID'];
        }
        if (isset($map['diagnosisType'])) {
            $model->diagnosisType = $map['diagnosisType'];
        }

        return $model;
    }
}
