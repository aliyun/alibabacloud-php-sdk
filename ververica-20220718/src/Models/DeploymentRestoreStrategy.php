<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

class DeploymentRestoreStrategy extends Model
{
    /**
     * @example TRUE
     *
     * @var bool
     */
    public $allowNonRestoredState;

    /**
     * @example 1660293803155
     *
     * @var int
     */
    public $jobStartTimeInMs;

    /**
     * @example LATEST_STATE
     *
     * @var string
     */
    public $kind;

    /**
     * @example 354dde66-a3ae-463e-967a-0b4107fd****
     *
     * @var string
     */
    public $savepointId;
    protected $_name = [
        'allowNonRestoredState' => 'allowNonRestoredState',
        'jobStartTimeInMs'      => 'jobStartTimeInMs',
        'kind'                  => 'kind',
        'savepointId'           => 'savepointId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowNonRestoredState) {
            $res['allowNonRestoredState'] = $this->allowNonRestoredState;
        }
        if (null !== $this->jobStartTimeInMs) {
            $res['jobStartTimeInMs'] = $this->jobStartTimeInMs;
        }
        if (null !== $this->kind) {
            $res['kind'] = $this->kind;
        }
        if (null !== $this->savepointId) {
            $res['savepointId'] = $this->savepointId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeploymentRestoreStrategy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['allowNonRestoredState'])) {
            $model->allowNonRestoredState = $map['allowNonRestoredState'];
        }
        if (isset($map['jobStartTimeInMs'])) {
            $model->jobStartTimeInMs = $map['jobStartTimeInMs'];
        }
        if (isset($map['kind'])) {
            $model->kind = $map['kind'];
        }
        if (isset($map['savepointId'])) {
            $model->savepointId = $map['savepointId'];
        }

        return $model;
    }
}
