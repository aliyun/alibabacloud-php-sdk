<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class GetDetectionResultRequest extends Model
{
    /**
     * @var int
     */
    public $countByPage;

    /**
     * @var bool
     */
    public $desensitization;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var int
     */
    public $page;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'countByPage'     => 'CountByPage',
        'desensitization' => 'Desensitization',
        'jobId'           => 'JobId',
        'page'            => 'Page',
        'status'          => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->countByPage) {
            $res['CountByPage'] = $this->countByPage;
        }
        if (null !== $this->desensitization) {
            $res['Desensitization'] = $this->desensitization;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDetectionResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CountByPage'])) {
            $model->countByPage = $map['CountByPage'];
        }
        if (isset($map['Desensitization'])) {
            $model->desensitization = $map['Desensitization'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
