<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models;

use AlibabaCloud\Tea\Model;

class GetDocumentAnalyzeResultRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example bfce2248-1546-4298-8bcf-70ac26e69646
     *
     * @var string
     */
    public $jobId;
    protected $_name = [
        'jobId' => 'jobId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobId) {
            $res['jobId'] = $this->jobId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDocumentAnalyzeResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['jobId'])) {
            $model->jobId = $map['jobId'];
        }

        return $model;
    }
}
