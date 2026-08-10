<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CodeSec\V20260401\Models\DescribeProjectsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CodeSec\V20260401\Models\DescribeProjectsResponseBody\items\engines;
use AlibabaCloud\SDK\CodeSec\V20260401\Models\DescribeProjectsResponseBody\items\source;

class items extends Model
{
    /**
     * @var int
     */
    public $configRevision;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $createdBy;

    /**
     * @var string
     */
    public $description;

    /**
     * @var engines
     */
    public $engines;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $instructionPrompt;

    /**
     * @var string
     */
    public $name;

    /**
     * @var source
     */
    public $source;

    /**
     * @var string
     */
    public $updatedAt;
    protected $_name = [
        'configRevision' => 'configRevision',
        'createdAt' => 'createdAt',
        'createdBy' => 'createdBy',
        'description' => 'description',
        'engines' => 'engines',
        'id' => 'id',
        'instructionPrompt' => 'instructionPrompt',
        'name' => 'name',
        'source' => 'source',
        'updatedAt' => 'updatedAt',
    ];

    public function validate()
    {
        if (null !== $this->engines) {
            $this->engines->validate();
        }
        if (null !== $this->source) {
            $this->source->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configRevision) {
            $res['configRevision'] = $this->configRevision;
        }

        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->createdBy) {
            $res['createdBy'] = $this->createdBy;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->engines) {
            $res['engines'] = null !== $this->engines ? $this->engines->toArray($noStream) : $this->engines;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->instructionPrompt) {
            $res['instructionPrompt'] = $this->instructionPrompt;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->source) {
            $res['source'] = null !== $this->source ? $this->source->toArray($noStream) : $this->source;
        }

        if (null !== $this->updatedAt) {
            $res['updatedAt'] = $this->updatedAt;
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
        if (isset($map['configRevision'])) {
            $model->configRevision = $map['configRevision'];
        }

        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['createdBy'])) {
            $model->createdBy = $map['createdBy'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['engines'])) {
            $model->engines = engines::fromMap($map['engines']);
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['instructionPrompt'])) {
            $model->instructionPrompt = $map['instructionPrompt'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['source'])) {
            $model->source = source::fromMap($map['source']);
        }

        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }

        return $model;
    }
}
