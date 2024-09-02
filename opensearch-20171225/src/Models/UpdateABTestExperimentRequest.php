<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Tea\Model;

class UpdateABTestExperimentRequest extends Model
{
    /**
     * @description The request body. For more information, see [ABTestExperiment](https://help.aliyun.com/document_detail/173617.html).
     *
     * @var ABTestExperiment
     */
    public $body;

    /**
     * @description Specifies whether to perform only a dry run, without performing the actual request. Valid values:
     *
     *   true: performs only a dry run. No endpoint is created. The system checks whether your AccessKey is valid, whether Resource Access Management (RAM) users are authorized, and whether the required parameters are set.
     *   false (default): creates an endpoint immediately.
     *
     * @example true
     *
     * @var bool
     */
    public $dryRun;
    protected $_name = [
        'body'   => 'body',
        'dryRun' => 'dryRun',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->body) {
            $res['body'] = null !== $this->body ? $this->body->toMap() : null;
        }
        if (null !== $this->dryRun) {
            $res['dryRun'] = $this->dryRun;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateABTestExperimentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['body'])) {
            $model->body = ABTestExperiment::fromMap($map['body']);
        }
        if (isset($map['dryRun'])) {
            $model->dryRun = $map['dryRun'];
        }

        return $model;
    }
}
