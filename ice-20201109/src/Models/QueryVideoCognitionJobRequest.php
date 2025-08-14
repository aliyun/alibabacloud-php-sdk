<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\QueryVideoCognitionJobRequest\includeResults;

class QueryVideoCognitionJobRequest extends Model
{
    /**
     * @var includeResults
     */
    public $includeResults;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $params;
    protected $_name = [
        'includeResults' => 'IncludeResults',
        'jobId' => 'JobId',
        'params' => 'Params',
    ];

    public function validate()
    {
        if (null !== $this->includeResults) {
            $this->includeResults->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->includeResults) {
            $res['IncludeResults'] = null !== $this->includeResults ? $this->includeResults->toArray($noStream) : $this->includeResults;
        }

        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->params) {
            $res['Params'] = $this->params;
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
        if (isset($map['IncludeResults'])) {
            $model->includeResults = includeResults::fromMap($map['IncludeResults']);
        }

        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['Params'])) {
            $model->params = $map['Params'];
        }

        return $model;
    }
}
