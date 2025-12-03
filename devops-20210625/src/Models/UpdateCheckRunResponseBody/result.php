<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\UpdateCheckRunResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateCheckRunResponseBody\result\annotations;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateCheckRunResponseBody\result\checkSuite;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateCheckRunResponseBody\result\output;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateCheckRunResponseBody\result\writer;

class result extends Model
{
    /**
     * @var annotations[]
     */
    public $annotations;

    /**
     * @var checkSuite
     */
    public $checkSuite;

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
    public $createdAt;

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
     * @var int
     */
    public $id;

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
    public $updatedAt;

    /**
     * @var writer
     */
    public $writer;
    protected $_name = [
        'annotations' => 'annotations',
        'checkSuite' => 'checkSuite',
        'completedAt' => 'completedAt',
        'conclusion' => 'conclusion',
        'createdAt' => 'createdAt',
        'detailsUrl' => 'detailsUrl',
        'externalId' => 'externalId',
        'headSha' => 'headSha',
        'id' => 'id',
        'name' => 'name',
        'output' => 'output',
        'startedAt' => 'startedAt',
        'status' => 'status',
        'updatedAt' => 'updatedAt',
        'writer' => 'writer',
    ];

    public function validate()
    {
        if (\is_array($this->annotations)) {
            Model::validateArray($this->annotations);
        }
        if (null !== $this->checkSuite) {
            $this->checkSuite->validate();
        }
        if (null !== $this->output) {
            $this->output->validate();
        }
        if (null !== $this->writer) {
            $this->writer->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->annotations) {
            if (\is_array($this->annotations)) {
                $res['annotations'] = [];
                $n1 = 0;
                foreach ($this->annotations as $item1) {
                    $res['annotations'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->checkSuite) {
            $res['checkSuite'] = null !== $this->checkSuite ? $this->checkSuite->toArray($noStream) : $this->checkSuite;
        }

        if (null !== $this->completedAt) {
            $res['completedAt'] = $this->completedAt;
        }

        if (null !== $this->conclusion) {
            $res['conclusion'] = $this->conclusion;
        }

        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
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

        if (null !== $this->id) {
            $res['id'] = $this->id;
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

        if (null !== $this->updatedAt) {
            $res['updatedAt'] = $this->updatedAt;
        }

        if (null !== $this->writer) {
            $res['writer'] = null !== $this->writer ? $this->writer->toArray($noStream) : $this->writer;
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
        if (isset($map['annotations'])) {
            if (!empty($map['annotations'])) {
                $model->annotations = [];
                $n1 = 0;
                foreach ($map['annotations'] as $item1) {
                    $model->annotations[$n1] = annotations::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['checkSuite'])) {
            $model->checkSuite = checkSuite::fromMap($map['checkSuite']);
        }

        if (isset($map['completedAt'])) {
            $model->completedAt = $map['completedAt'];
        }

        if (isset($map['conclusion'])) {
            $model->conclusion = $map['conclusion'];
        }

        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
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

        if (isset($map['id'])) {
            $model->id = $map['id'];
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

        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }

        if (isset($map['writer'])) {
            $model->writer = writer::fromMap($map['writer']);
        }

        return $model;
    }
}
