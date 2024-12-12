<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListWafRulesRequest;

use AlibabaCloud\Tea\Model;

class queryArgs extends Model
{
    /**
     * @var string
     */
    public $configValueLike;

    /**
     * @description Specifies whether to sort the returned data in descending order.
     *
     * @example true
     *
     * @var bool
     */
    public $desc;

    /**
     * @description The ID of a WAF rule for exact search.
     *
     * @example 20000001
     *
     * @var int
     */
    public $id;

    /**
     * @description The ID or name of a WAF rule for fuzzy search.
     *
     * @example example
     *
     * @var string
     */
    public $idNameLike;

    /**
     * @description The name of a WAF rule for fuzzy search.
     *
     * @example example
     *
     * @var string
     */
    public $nameLike;

    /**
     * @description The column by which you want to sort the returned data.
     *
     * @example position
     *
     * @var string
     */
    public $orderBy;

    /**
     * @description The ID of a WAF ruleset for exact search.
     *
     * @example 10000001
     *
     * @var int
     */
    public $rulesetId;

    /**
     * @description The status of a WAF rule for exact search.
     *
     * @example on
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'configValueLike' => 'ConfigValueLike',
        'desc'            => 'Desc',
        'id'              => 'Id',
        'idNameLike'      => 'IdNameLike',
        'nameLike'        => 'NameLike',
        'orderBy'         => 'OrderBy',
        'rulesetId'       => 'RulesetId',
        'status'          => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (isset($map['RulesetId'])) {
            $model->rulesetId = $map['RulesetId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
