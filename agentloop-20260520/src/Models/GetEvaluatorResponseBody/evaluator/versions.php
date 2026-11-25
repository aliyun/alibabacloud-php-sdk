<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetEvaluatorResponseBody\evaluator;

use AlibabaCloud\Dara\Model;

class versions extends Model
{
    /**
     * @var int
     */
    public $createdAt;

    /**
     * @var bool
     */
    public $selectable;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $updatedAt;

    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $versionDescription;
    protected $_name = [
        'createdAt' => 'createdAt',
        'selectable' => 'selectable',
        'status' => 'status',
        'updatedAt' => 'updatedAt',
        'version' => 'version',
        'versionDescription' => 'versionDescription',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->selectable) {
            $res['selectable'] = $this->selectable;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->updatedAt) {
            $res['updatedAt'] = $this->updatedAt;
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        if (null !== $this->versionDescription) {
            $res['versionDescription'] = $this->versionDescription;
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
        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['selectable'])) {
            $model->selectable = $map['selectable'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        if (isset($map['versionDescription'])) {
            $model->versionDescription = $map['versionDescription'];
        }

        return $model;
    }
}
