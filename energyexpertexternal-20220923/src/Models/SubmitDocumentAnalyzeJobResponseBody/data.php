<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\SubmitDocumentAnalyzeJobResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example adkc-kk2k41-kk2ol-222424
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
     * @return data
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
