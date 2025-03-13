<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\SDK\Devops\V20210625\Models\CreateCheckRunRequest\annotations;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateCheckRunRequest\output;
use AlibabaCloud\Tea\Model;

class CreateCheckRunRequest extends Model
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
     * @example xxx
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
     * @description This parameter is required.
     *
     * @example 40f4ccfe019cdd4a62d4acb0c57130106fc7e1be
     *
     * @var string
     */
    public $headSha;

    /**
     * @description This parameter is required.
     *
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
     * @example 5ebbc0228123212b59xxxxx
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
        'headSha'            => 'headSha',
        'name'               => 'name',
        'output'             => 'output',
        'startedAt'          => 'startedAt',
        'status'             => 'status',
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
        if (null !== $this->headSha) {
            $res['headSha'] = $this->headSha;
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
     * @return CreateCheckRunRequest
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
        if (isset($map['headSha'])) {
            $model->headSha = $map['headSha'];
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
        if (isset($map['organizationId'])) {
            $model->organizationId = $map['organizationId'];
        }
        if (isset($map['repositoryIdentity'])) {
            $model->repositoryIdentity = $map['repositoryIdentity'];
        }

        return $model;
    }
}
