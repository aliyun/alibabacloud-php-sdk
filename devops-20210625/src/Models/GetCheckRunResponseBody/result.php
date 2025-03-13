<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetCheckRunResponseBody;

use AlibabaCloud\SDK\Devops\V20210625\Models\GetCheckRunResponseBody\result\annotations;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetCheckRunResponseBody\result\checkSuite;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetCheckRunResponseBody\result\output;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetCheckRunResponseBody\result\writer;
use AlibabaCloud\Tea\Model;

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
     * @example 2022-01-14T21:08:26+08:00
     *
     * @var string
     */
    public $createdAt;

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
     * @example 40f4ccfe019cdd4a62d4acb0c57130106fc7e1be
     *
     * @var string
     */
    public $headSha;

    /**
     * @example 5240
     *
     * @var int
     */
    public $id;

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
     * @example 2022-01-14T21:08:26+08:00
     *
     * @var string
     */
    public $updatedAt;

    /**
     * @var writer
     */
    public $writer;
    protected $_name = [
        'annotations' => 'annotations',
        'checkSuite'  => 'checkSuite',
        'completedAt' => 'completedAt',
        'conclusion'  => 'conclusion',
        'createdAt'   => 'createdAt',
        'detailsUrl'  => 'detailsUrl',
        'externalId'  => 'externalId',
        'headSha'     => 'headSha',
        'id'          => 'id',
        'name'        => 'name',
        'output'      => 'output',
        'startedAt'   => 'startedAt',
        'status'      => 'status',
        'updatedAt'   => 'updatedAt',
        'writer'      => 'writer',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->annotations) {
            $res['annotations'] = [];
            if (null !== $this->annotations && \is_array($this->annotations)) {
                $n = 0;
                foreach ($this->annotations as $item) {
                    $res['annotations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->checkSuite) {
            $res['checkSuite'] = null !== $this->checkSuite ? $this->checkSuite->toMap() : null;
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
            $res['output'] = null !== $this->output ? $this->output->toMap() : null;
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
            $res['writer'] = null !== $this->writer ? $this->writer->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['annotations'])) {
            if (!empty($map['annotations'])) {
                $model->annotations = [];
                $n                  = 0;
                foreach ($map['annotations'] as $item) {
                    $model->annotations[$n++] = null !== $item ? annotations::fromMap($item) : $item;
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
