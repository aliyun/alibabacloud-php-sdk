<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class PdpServiceUpdateCmd extends Model
{
    /**
     * @var string
     */
    public $alias;

    /**
     * @var string
     */
    public $codeBranch;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $extraInfo;

    /**
     * @var string
     */
    public $gitRepo;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $jumpUrl;
    protected $_name = [
        'alias' => 'alias',
        'codeBranch' => 'codeBranch',
        'description' => 'description',
        'extraInfo' => 'extraInfo',
        'gitRepo' => 'gitRepo',
        'id' => 'id',
        'jumpUrl' => 'jumpUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alias) {
            $res['alias'] = $this->alias;
        }

        if (null !== $this->codeBranch) {
            $res['codeBranch'] = $this->codeBranch;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->extraInfo) {
            $res['extraInfo'] = $this->extraInfo;
        }

        if (null !== $this->gitRepo) {
            $res['gitRepo'] = $this->gitRepo;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->jumpUrl) {
            $res['jumpUrl'] = $this->jumpUrl;
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
        if (isset($map['alias'])) {
            $model->alias = $map['alias'];
        }

        if (isset($map['codeBranch'])) {
            $model->codeBranch = $map['codeBranch'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['extraInfo'])) {
            $model->extraInfo = $map['extraInfo'];
        }

        if (isset($map['gitRepo'])) {
            $model->gitRepo = $map['gitRepo'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['jumpUrl'])) {
            $model->jumpUrl = $map['jumpUrl'];
        }

        return $model;
    }
}
