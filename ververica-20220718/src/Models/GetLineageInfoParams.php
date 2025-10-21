<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class GetLineageInfoParams extends Model
{
    /**
     * @var int
     */
    public $depth;

    /**
     * @var string
     */
    public $direction;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $idType;

    /**
     * @var bool
     */
    public $isColumnLevel;

    /**
     * @var bool
     */
    public $isTemporary;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'depth' => 'depth',
        'direction' => 'direction',
        'id' => 'id',
        'idType' => 'idType',
        'isColumnLevel' => 'isColumnLevel',
        'isTemporary' => 'isTemporary',
        'namespace' => 'namespace',
        'workspace' => 'workspace',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->depth) {
            $res['depth'] = $this->depth;
        }

        if (null !== $this->direction) {
            $res['direction'] = $this->direction;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->idType) {
            $res['idType'] = $this->idType;
        }

        if (null !== $this->isColumnLevel) {
            $res['isColumnLevel'] = $this->isColumnLevel;
        }

        if (null !== $this->isTemporary) {
            $res['isTemporary'] = $this->isTemporary;
        }

        if (null !== $this->namespace) {
            $res['namespace'] = $this->namespace;
        }

        if (null !== $this->workspace) {
            $res['workspace'] = $this->workspace;
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
        if (isset($map['depth'])) {
            $model->depth = $map['depth'];
        }

        if (isset($map['direction'])) {
            $model->direction = $map['direction'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['idType'])) {
            $model->idType = $map['idType'];
        }

        if (isset($map['isColumnLevel'])) {
            $model->isColumnLevel = $map['isColumnLevel'];
        }

        if (isset($map['isTemporary'])) {
            $model->isTemporary = $map['isTemporary'];
        }

        if (isset($map['namespace'])) {
            $model->namespace = $map['namespace'];
        }

        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}
