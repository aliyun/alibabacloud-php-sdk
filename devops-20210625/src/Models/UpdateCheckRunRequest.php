<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateCheckRunRequest\annotations;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateCheckRunRequest\output;
use AlibabaCloud\Tea\Model;

class UpdateCheckRunRequest extends Model
{
    /**
     * @example f0b1e61db5961df5975a93f9129d2513
     *
     * @var string
     */
    public $accessToken;

    /**
     * @var annotations[]
     */
    public $annotations;

    /**
     * @example 2023-03-15T08:00:00Z
     *
     * @var string
     */
    public $completedAt;

    /**
     * @example success
     *
     * @var string
     */
    public $conclusion;

    /**
     * @example xx
     *
     * @var string
     */
    public $detailsUrl;

    /**
     * @example 42
     *
     * @var string
     */
    public $externalId;

    /**
     * @example my-check-ci
     *
     * @var string
     */
    public $name;

    /**
     * @var output
     */
    public $output;

    /**
     * @example 2023-03-15T08:00:00Z
     *
     * @var string
     */
    public $startedAt;

    /**
     * @example completed
     *
     * @var string
     */
    public $status;

    /**
     * @description This parameter is required.
     *
     * @example 2
     *
     * @var int
     */
    public $checkRunId;

    /**
     * @description This parameter is required.
     *
     * @example 60de7a6852743a5162b5f957
     *
     * @var string
     */
    public $organizationId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $repositoryIdentity;
    protected $_name = [
        'accessToken'        => 'accessToken',
        'annotations'        => 'annotations',
        'completedAt'        => 'completedAt',
        'conclusion'         => 'conclusion',
        'detailsUrl'         => 'detailsUrl',
        'externalId'         => 'externalId',
        'name'               => 'name',
        'output'             => 'output',
        'startedAt'          => 'startedAt',
        'status'             => 'status',
        'checkRunId'         => 'checkRunId',
        'organizationId'     => 'organizationId',
        'repositoryIdentity' => 'repositoryIdentity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessToken) {
            $res['accessToken'] = $this->accessToken;
        }
        if (null !== $this->annotations) {
            $res['annotations'] = [];
            if (null !== $this->annotations && \is_array($this->annotations)) {
                $n = 0;
                foreach ($this->annotations as $item) {
                    $res['annotations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->completedAt) {
            $res['completedAt'] = $this->completedAt;
        }
        if (null !== $this->conclusion) {
            $res['conclusion'] = $this->conclusion;
        }
        if (null !== $this->detailsUrl) {
            $res['detailsUrl'] = $this->detailsUrl;
        }
        if (null !== $this->externalId) {
            $res['externalId'] = $this->externalId;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->output) {
            $res['output'] = null !== $this->output ? $this->output->toMap() : null;
        }
        if (null !== $this->startedAt) {
            $res['startedAt'] = $this->startedAt;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->checkRunId) {
            $res['checkRunId'] = $this->checkRunId;
        }
        if (null !== $this->organizationId) {
            $res['organizationId'] = $this->organizationId;
        }
        if (null !== $this->repositoryIdentity) {
            $res['repositoryIdentity'] = $this->repositoryIdentity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateCheckRunRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accessToken'])) {
            $model->accessToken = $map['accessToken'];
        }
        if (isset($map['annotations'])) {
            if (!empty($map['annotations'])) {
                $model->annotations = [];
                $n                  = 0;
                foreach ($map['annotations'] as $item) {
                    $model->annotations[$n++] = null !== $item ? annotations::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['completedAt'])) {
            $model->completedAt = $map['completedAt'];
        }
        if (isset($map['conclusion'])) {
            $model->conclusion = $map['conclusion'];
        }
        if (isset($map['detailsUrl'])) {
            $model->detailsUrl = $map['detailsUrl'];
        }
        if (isset($map['externalId'])) {
            $model->externalId = $map['externalId'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['output'])) {
            $model->output = output::fromMap($map['output']);
        }
        if (isset($map['startedAt'])) {
            $model->startedAt = $map['startedAt'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['checkRunId'])) {
            $model->checkRunId = $map['checkRunId'];
        }
        if (isset($map['organizationId'])) {
            $model->organizationId = $map['organizationId'];
        }
        if (isset($map['repositoryIdentity'])) {
            $model->repositoryIdentity = $map['repositoryIdentity'];
        }

        return $model;
    }
}
