<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListListsRequest;

use AlibabaCloud\Dara\Model;

class queryArgs extends Model
{
    /**
     * @var bool
     */
    public $desc;

    /**
     * @var string
     */
    public $descriptionLike;

    /**
     * @var string
     */
    public $idLike;

    /**
     * @var string
     */
    public $itemLike;

    /**
     * @var string
     */
    public $kind;

    /**
     * @var string
     */
    public $nameItemLike;

    /**
     * @var string
     */
    public $nameLike;

    /**
     * @var string
     */
    public $orderBy;
    protected $_name = [
        'desc' => 'Desc',
        'descriptionLike' => 'DescriptionLike',
        'idLike' => 'IdLike',
        'itemLike' => 'ItemLike',
        'kind' => 'Kind',
        'nameItemLike' => 'NameItemLike',
        'nameLike' => 'NameLike',
        'orderBy' => 'OrderBy',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }

        if (null !== $this->descriptionLike) {
            $res['DescriptionLike'] = $this->descriptionLike;
        }

        if (null !== $this->idLike) {
            $res['IdLike'] = $this->idLike;
        }

        if (null !== $this->itemLike) {
            $res['ItemLike'] = $this->itemLike;
        }

        if (null !== $this->kind) {
            $res['Kind'] = $this->kind;
        }

        if (null !== $this->nameItemLike) {
            $res['NameItemLike'] = $this->nameItemLike;
        }

        if (null !== $this->nameLike) {
            $res['NameLike'] = $this->nameLike;
        }

        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
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
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }

        if (isset($map['DescriptionLike'])) {
            $model->descriptionLike = $map['DescriptionLike'];
        }

        if (isset($map['IdLike'])) {
            $model->idLike = $map['IdLike'];
        }

        if (isset($map['ItemLike'])) {
            $model->itemLike = $map['ItemLike'];
        }

        if (isset($map['Kind'])) {
            $model->kind = $map['Kind'];
        }

        if (isset($map['NameItemLike'])) {
            $model->nameItemLike = $map['NameItemLike'];
        }

        if (isset($map['NameLike'])) {
            $model->nameLike = $map['NameLike'];
        }

        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
        }

        return $model;
    }
}
