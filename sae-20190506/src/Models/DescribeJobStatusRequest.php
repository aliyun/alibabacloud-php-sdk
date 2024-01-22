<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class DescribeJobStatusRequest extends Model
{
    /**
     * @description The ID of the job template.
     *
     * @example e1a7a07-abcb-4652-a1d3-2d57f415****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The job ID.
     *
     * @example event-b798157b-40a2-4388-b578-71fb897103**-**
     *
     * @var string
     */
    public $jobId;
    protected $_name = [
        'appId' => 'AppId',
        'jobId' => 'JobId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeJobStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        return $model;
    }
}
