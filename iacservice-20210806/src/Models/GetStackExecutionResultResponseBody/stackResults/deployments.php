<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\GetStackExecutionResultResponseBody\stackResults;

use AlibabaCloud\Dara\Model;

class deployments extends Model
{
    /**
     * @var string
     */
    public $deploymentName;

    /**
     * @var string
     */
    public $jobResult;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'deploymentName' => 'deploymentName',
        'jobResult' => 'jobResult',
        'status' => 'status',
        'url' => 'url',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deploymentName) {
            $res['deploymentName'] = $this->deploymentName;
        }

        if (null !== $this->jobResult) {
            $res['jobResult'] = $this->jobResult;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->url) {
            $res['url'] = $this->url;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['deploymentName'])) {
            $model->deploymentName = $map['deploymentName'];
        }

        if (isset($map['jobResult'])) {
            $model->jobResult = $map['jobResult'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}
