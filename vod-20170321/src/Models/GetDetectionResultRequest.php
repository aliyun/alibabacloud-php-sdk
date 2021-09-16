<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class GetDetectionResultRequest extends Model
{
    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var bool
     */
    public $desensitization;

    /**
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $countByPage;
    protected $_name = [
        'jobId'           => 'JobId',
        'status'          => 'Status',
        'desensitization' => 'Desensitization',
        'page'            => 'Page',
        'countByPage'     => 'CountByPage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->desensitization) {
            $res['Desensitization'] = $this->desensitization;
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->countByPage) {
            $res['CountByPage'] = $this->countByPage;
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
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Desensitization'])) {
            $model->desensitization = $map['Desensitization'];
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['CountByPage'])) {
            $model->countByPage = $map['CountByPage'];
        }

        return $model;
    }
}
