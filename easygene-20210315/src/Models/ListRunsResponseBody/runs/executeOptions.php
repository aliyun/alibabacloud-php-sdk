<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EasyGene\V20210315\Models\ListRunsResponseBody\runs;

use AlibabaCloud\Tea\Model;

class executeOptions extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $callCaching;

    /**
     * @example false
     *
     * @var bool
     */
    public $deleteIntermediateResults;

    /**
     * @example NoNewCalls
     *
     * @var string
     */
    public $failureMode;

    /**
     * @example false
     *
     * @var bool
     */
    public $useRelativeOutputPaths;
    protected $_name = [
        'callCaching'               => 'CallCaching',
        'deleteIntermediateResults' => 'DeleteIntermediateResults',
        'failureMode'               => 'FailureMode',
        'useRelativeOutputPaths'    => 'UseRelativeOutputPaths',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callCaching) {
            $res['CallCaching'] = $this->callCaching;
        }
        if (null !== $this->deleteIntermediateResults) {
            $res['DeleteIntermediateResults'] = $this->deleteIntermediateResults;
        }
        if (null !== $this->failureMode) {
            $res['FailureMode'] = $this->failureMode;
        }
        if (null !== $this->useRelativeOutputPaths) {
            $res['UseRelativeOutputPaths'] = $this->useRelativeOutputPaths;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return executeOptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallCaching'])) {
            $model->callCaching = $map['CallCaching'];
        }
        if (isset($map['DeleteIntermediateResults'])) {
            $model->deleteIntermediateResults = $map['DeleteIntermediateResults'];
        }
        if (isset($map['FailureMode'])) {
            $model->failureMode = $map['FailureMode'];
        }
        if (isset($map['UseRelativeOutputPaths'])) {
            $model->useRelativeOutputPaths = $map['UseRelativeOutputPaths'];
        }

        return $model;
    }
}
