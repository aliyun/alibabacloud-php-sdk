<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListWafRulesRequest;

use AlibabaCloud\Tea\Model;

class queryArgs extends Model
{
    /**
     * @var bool
     */
    public $desc;

    /**
     * @example 20000001
     *
     * @var int
     */
    public $id;

    /**
     * @example example
     *
     * @var string
     */
    public $idNameLike;

    /**
     * @example example
     *
     * @var string
     */
    public $nameLike;

    /**
     * @example position
     *
     * @var string
     */
    public $orderBy;

    /**
     * @example 10000001
     *
     * @var int
     */
    public $rulesetId;

    /**
     * @example on
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'desc'       => 'Desc',
        'id'         => 'Id',
        'idNameLike' => 'IdNameLike',
        'nameLike'   => 'NameLike',
        'orderBy'    => 'OrderBy',
        'rulesetId'  => 'RulesetId',
        'status'     => 'Status',
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
        if (null !== $this->rulesetId) {
            $res['RulesetId'] = $this->rulesetId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['RulesetId'])) {
            $model->rulesetId = $map['RulesetId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
