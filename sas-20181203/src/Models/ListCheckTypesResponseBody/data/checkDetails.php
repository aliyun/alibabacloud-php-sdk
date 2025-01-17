<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckTypesResponseBody\data;

use AlibabaCloud\Dara\Model;

class checkDetails extends Model
{
    /**
     * @var string[]
     */
    public $affiliatedRiskTypes;
    /**
     * @var string[]
     */
    public $affiliatedRisks;
    /**
     * @var int
     */
    public $checkId;
    /**
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
        if (\is_array($this->affiliatedRiskTypes)) {
            Model::validateArray($this->affiliatedRiskTypes);
        }
        if (\is_array($this->affiliatedRisks)) {
            Model::validateArray($this->affiliatedRisks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->affiliatedRiskTypes) {
            if (\is_array($this->affiliatedRiskTypes)) {
                $res['AffiliatedRiskTypes'] = [];
                $n1                         = 0;
                foreach ($this->affiliatedRiskTypes as $item1) {
                    $res['AffiliatedRiskTypes'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->affiliatedRisks) {
            if (\is_array($this->affiliatedRisks)) {
                $res['AffiliatedRisks'] = [];
                $n1                     = 0;
                foreach ($this->affiliatedRisks as $item1) {
                    $res['AffiliatedRisks'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->checkId) {
            $res['CheckId'] = $this->checkId;
        }

        if (null !== $this->checkItem) {
            $res['CheckItem'] = $this->checkItem;
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
        if (isset($map['AffiliatedRiskTypes'])) {
            if (!empty($map['AffiliatedRiskTypes'])) {
                $model->affiliatedRiskTypes = [];
                $n1                         = 0;
                foreach ($map['AffiliatedRiskTypes'] as $item1) {
                    $model->affiliatedRiskTypes[$n1++] = $item1;
                }
            }
        }

        if (isset($map['AffiliatedRisks'])) {
            if (!empty($map['AffiliatedRisks'])) {
                $model->affiliatedRisks = [];
                $n1                     = 0;
                foreach ($map['AffiliatedRisks'] as $item1) {
                    $model->affiliatedRisks[$n1++] = $item1;
                }
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
