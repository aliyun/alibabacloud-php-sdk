<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class ListExternalServicesRequest extends Model
{
    /**
     * @var bool
     */
    public $importableOnly;

    /**
     * @var int
     */
    public $limit;

    /**
     * @var string
     */
    public $nameLike;

    /**
     * @var string
     */
    public $paiWorkspaceId;

    /**
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'importableOnly' => 'importableOnly',
        'limit' => 'limit',
        'nameLike' => 'nameLike',
        'paiWorkspaceId' => 'paiWorkspaceId',
        'sourceType' => 'sourceType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->importableOnly) {
            $res['importableOnly'] = $this->importableOnly;
        }

        if (null !== $this->limit) {
            $res['limit'] = $this->limit;
        }

        if (null !== $this->nameLike) {
            $res['nameLike'] = $this->nameLike;
        }

        if (null !== $this->paiWorkspaceId) {
            $res['paiWorkspaceId'] = $this->paiWorkspaceId;
        }

        if (null !== $this->sourceType) {
            $res['sourceType'] = $this->sourceType;
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
        if (isset($map['importableOnly'])) {
            $model->importableOnly = $map['importableOnly'];
        }

        if (isset($map['limit'])) {
            $model->limit = $map['limit'];
        }

        if (isset($map['nameLike'])) {
            $model->nameLike = $map['nameLike'];
        }

        if (isset($map['paiWorkspaceId'])) {
            $model->paiWorkspaceId = $map['paiWorkspaceId'];
        }

        if (isset($map['sourceType'])) {
            $model->sourceType = $map['sourceType'];
        }

        return $model;
    }
}
