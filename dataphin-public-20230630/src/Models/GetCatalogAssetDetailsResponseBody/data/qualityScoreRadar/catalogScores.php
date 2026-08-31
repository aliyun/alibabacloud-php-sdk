<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetCatalogAssetDetailsResponseBody\data\qualityScoreRadar;

use AlibabaCloud\Dara\Model;

class catalogScores extends Model
{
    /**
     * @var string
     */
    public $catalog;

    /**
     * @var int
     */
    public $fieldRuleCount;

    /**
     * @var float
     */
    public $passRate;

    /**
     * @var int
     */
    public $passRuleCount;

    /**
     * @var float
     */
    public $score;

    /**
     * @var int
     */
    public $tableRuleCount;

    /**
     * @var int
     */
    public $validateRuleCount;
    protected $_name = [
        'catalog' => 'Catalog',
        'fieldRuleCount' => 'FieldRuleCount',
        'passRate' => 'PassRate',
        'passRuleCount' => 'PassRuleCount',
        'score' => 'Score',
        'tableRuleCount' => 'TableRuleCount',
        'validateRuleCount' => 'ValidateRuleCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->catalog) {
            $res['Catalog'] = $this->catalog;
        }

        if (null !== $this->fieldRuleCount) {
            $res['FieldRuleCount'] = $this->fieldRuleCount;
        }

        if (null !== $this->passRate) {
            $res['PassRate'] = $this->passRate;
        }

        if (null !== $this->passRuleCount) {
            $res['PassRuleCount'] = $this->passRuleCount;
        }

        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }

        if (null !== $this->tableRuleCount) {
            $res['TableRuleCount'] = $this->tableRuleCount;
        }

        if (null !== $this->validateRuleCount) {
            $res['ValidateRuleCount'] = $this->validateRuleCount;
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
        if (isset($map['Catalog'])) {
            $model->catalog = $map['Catalog'];
        }

        if (isset($map['FieldRuleCount'])) {
            $model->fieldRuleCount = $map['FieldRuleCount'];
        }

        if (isset($map['PassRate'])) {
            $model->passRate = $map['PassRate'];
        }

        if (isset($map['PassRuleCount'])) {
            $model->passRuleCount = $map['PassRuleCount'];
        }

        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }

        if (isset($map['TableRuleCount'])) {
            $model->tableRuleCount = $map['TableRuleCount'];
        }

        if (isset($map['ValidateRuleCount'])) {
            $model->validateRuleCount = $map['ValidateRuleCount'];
        }

        return $model;
    }
}
