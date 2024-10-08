<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListListsRequest;

use AlibabaCloud\Tea\Model;

class queryArgs extends Model
{
    /**
     * @var bool
     */
    public $desc;

    /**
     * @example a custom list
     *
     * @var string
     */
    public $descriptionLike;

    /**
     * @example 40000001
     *
     * @var string
     */
    public $idLike;

    /**
     * @example 10.1.1.1
     *
     * @var string
     */
    public $itemLike;

    /**
     * @example ip
     *
     * @var string
     */
    public $kind;

    /**
     * @example 10.1.1.1
     *
     * @var string
     */
    public $nameItemLike;

    /**
     * @example example
     *
     * @var string
     */
    public $nameLike;

    /**
     * @example id
     *
     * @var string
     */
    public $orderBy;
    protected $_name = [
        'desc'            => 'Desc',
        'descriptionLike' => 'DescriptionLike',
        'idLike'          => 'IdLike',
        'itemLike'        => 'ItemLike',
        'kind'            => 'Kind',
        'nameItemLike'    => 'NameItemLike',
        'nameLike'        => 'NameLike',
        'orderBy'         => 'OrderBy',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return queryArgs
     */
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
