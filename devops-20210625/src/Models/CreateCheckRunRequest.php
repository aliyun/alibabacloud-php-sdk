<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateCheckRunRequest\annotations;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateCheckRunRequest\output;

class CreateCheckRunRequest extends Model
{
    /**
     * @var string
     */
    public $accessToken;
    /**
     * @var annotations[]
     */
    public $annotations;
    /**
     * @var string
     */
    public $completedAt;
    /**
     * @var string
     */
    public $conclusion;
    /**
     * @var string
     */
    public $detailsUrl;
    /**
     * @var string
     */
    public $externalId;
    /**
     * @var string
     */
    public $headSha;
    /**
     * @var string
     */
    public $name;
    /**
     * @var output
     */
    public $output;
    /**
     * @var string
     */
    public $startedAt;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $organizationId;
    /**
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
        if (\is_array($this->annotations)) {
            Model::validateArray($this->annotations);
        }
        if (null !== $this->output) {
            $this->output->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessToken) {
            $res['accessToken'] = $this->accessToken;
        }

        if (null !== $this->annotations) {
            if (\is_array($this->annotations)) {
                $res['annotations'] = [];
                $n1                 = 0;
                foreach ($this->annotations as $item1) {
                    $res['annotations'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            $res['output'] = null !== $this->output ? $this->output->toArray($noStream) : $this->output;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accessToken'])) {
            $model->accessToken = $map['accessToken'];
        }

        if (isset($map['annotations'])) {
            if (!empty($map['annotations'])) {
                $model->annotations = [];
                $n1                 = 0;
                foreach ($map['annotations'] as $item1) {
                    $model->annotations[$n1++] = annotations::fromMap($item1);
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
