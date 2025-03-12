<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckTypesResponseBody\data;

use AlibabaCloud\Tea\Model;

class checkDetails extends Model
{
    /**
     * @description The list of the baseline categories of attribution.
     *
     * @var string[]
     */
    public $affiliatedRiskTypes;

    /**
     * @description The list of baselines attribution.
     *
     * @var string[]
     */
    public $affiliatedRisks;

    /**
     * @description The ID of the check item.
     *
     * @example 31
     *
     * @var int
     */
    public $checkId;

    /**
     * @description The description of the check item.
     *
     * @example Configure the idle session timeout period.
     *
     * @var string
     */
    public $checkItem;
    protected $_name = [
        'affiliatedRiskTypes' => 'AffiliatedRiskTypes',
        'affiliatedRisks'     => 'AffiliatedRisks',
        'checkId'             => 'CheckId',
        'checkItem'           => 'CheckItem',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->affiliatedRiskTypes) {
            $res['AffiliatedRiskTypes'] = $this->affiliatedRiskTypes;
        }
        if (null !== $this->affiliatedRisks) {
            $res['AffiliatedRisks'] = $this->affiliatedRisks;
        }
        if (null !== $this->checkId) {
            $res['CheckId'] = $this->checkId;
        }
        if (null !== $this->checkItem) {
            $res['CheckItem'] = $this->checkItem;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return checkDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AffiliatedRiskTypes'])) {
            if (!empty($map['AffiliatedRiskTypes'])) {
                $model->affiliatedRiskTypes = $map['AffiliatedRiskTypes'];
            }
        }
        if (isset($map['AffiliatedRisks'])) {
            if (!empty($map['AffiliatedRisks'])) {
                $model->affiliatedRisks = $map['AffiliatedRisks'];
            }
        }
        if (isset($map['CheckId'])) {
            $model->checkId = $map['CheckId'];
        }
        if (isset($map['CheckItem'])) {
            $model->checkItem = $map['CheckItem'];
        }

        return $model;
    }
}
