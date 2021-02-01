<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models;

use AlibabaCloud\Tea\Model;

class DeleteSampleRequest extends Model
{
    /**
     * @var string
     */
    public $algorithmId;

    /**
     * @var string
     */
    public $sampleId;
    protected $_name = [
        'algorithmId' => 'AlgorithmId',
        'sampleId'    => 'SampleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->algorithmId) {
            $res['AlgorithmId'] = $this->algorithmId;
        }
        if (null !== $this->sampleId) {
            $res['SampleId'] = $this->sampleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteSampleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlgorithmId'])) {
            $model->algorithmId = $map['AlgorithmId'];
        }
        if (isset($map['SampleId'])) {
            $model->sampleId = $map['SampleId'];
        }

        return $model;
    }
}
