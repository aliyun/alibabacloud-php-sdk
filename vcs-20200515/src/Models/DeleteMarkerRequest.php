<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models;

use AlibabaCloud\Tea\Model;

class DeleteMarkerRequest extends Model
{
    /**
     * @var string
     */
    public $algorithmId;

    /**
     * @var string
     */
    public $sampleId;

    /**
     * @var string
     */
    public $markerId;
    protected $_name = [
        'algorithmId' => 'AlgorithmId',
        'sampleId'    => 'SampleId',
        'markerId'    => 'MarkerId',
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
        if (null !== $this->markerId) {
            $res['MarkerId'] = $this->markerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteMarkerRequest
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
        if (isset($map['MarkerId'])) {
            $model->markerId = $map['MarkerId'];
        }

        return $model;
    }
}
