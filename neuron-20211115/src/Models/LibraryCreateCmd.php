<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class LibraryCreateCmd extends Model
{
    /**
     * @var string
     */
    public $artifactId;

    /**
     * @var int
     */
    public $companyId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var int
     */
    public $marketId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $repoUrl;
    protected $_name = [
        'artifactId' => 'artifactId',
        'companyId' => 'companyId',
        'description' => 'description',
        'groupId' => 'groupId',
        'marketId' => 'marketId',
        'name' => 'name',
        'repoUrl' => 'repoUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->artifactId) {
            $res['artifactId'] = $this->artifactId;
        }

        if (null !== $this->companyId) {
            $res['companyId'] = $this->companyId;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->groupId) {
            $res['groupId'] = $this->groupId;
        }

        if (null !== $this->marketId) {
            $res['marketId'] = $this->marketId;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->repoUrl) {
            $res['repoUrl'] = $this->repoUrl;
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
        if (isset($map['artifactId'])) {
            $model->artifactId = $map['artifactId'];
        }

        if (isset($map['companyId'])) {
            $model->companyId = $map['companyId'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['groupId'])) {
            $model->groupId = $map['groupId'];
        }

        if (isset($map['marketId'])) {
            $model->marketId = $map['marketId'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['repoUrl'])) {
            $model->repoUrl = $map['repoUrl'];
        }

        return $model;
    }
}
