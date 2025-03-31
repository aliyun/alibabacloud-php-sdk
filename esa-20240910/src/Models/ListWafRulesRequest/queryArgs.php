<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListWafRulesRequest;

use AlibabaCloud\Dara\Model;

class queryArgs extends Model
{
    /**
     * @var string
     */
    public $configValueLike;

    /**
     * @var bool
     */
    public $desc;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $idNameLike;

    /**
     * @var string
     */
    public $nameLike;

    /**
     * @var string
     */
    public $orderBy;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'configValueLike' => 'ConfigValueLike',
        'desc' => 'Desc',
        'id' => 'Id',
        'idNameLike' => 'IdNameLike',
        'nameLike' => 'NameLike',
        'orderBy' => 'OrderBy',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configValueLike) {
            $res['ConfigValueLike'] = $this->configValueLike;
        }

        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->idNameLike) {
            $res['IdNameLike'] = $this->idNameLike;
        }

        if (null !== $this->nameLike) {
            $res['NameLike'] = $this->nameLike;
        }

        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['ConfigValueLike'])) {
            $model->configValueLike = $map['ConfigValueLike'];
        }

        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['IdNameLike'])) {
            $model->idNameLike = $map['IdNameLike'];
        }

        if (isset($map['NameLike'])) {
            $model->nameLike = $map['NameLike'];
        }

        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
