<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models;

use AlibabaCloud\Tea\Model;

class CreateSampleRequest extends Model
{
    /**
     * @var string
     */
    public $algorithmId;

    /**
     * @var string
     */
    public $sampleList;
    protected $_name = [
        'algorithmId' => 'AlgorithmId',
        'sampleList'  => 'SampleList',
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
        if (null !== $this->sampleList) {
            $res['SampleList'] = $this->sampleList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSampleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlgorithmId'])) {
            $model->algorithmId = $map['AlgorithmId'];
        }
        if (isset($map['SampleList'])) {
            $model->sampleList = $map['SampleList'];
        }

        return $model;
    }
}
