<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetCatalogAssetDetailsResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetCatalogAssetDetailsResponseBody\data\qualityScoreRadar\catalogScores;

class qualityScoreRadar extends Model
{
    /**
     * @var catalogScores[]
     */
    public $catalogScores;

    /**
     * @var int
     */
    public $passRuleCount;

    /**
     * @var float
     */
    public $totalScore;

    /**
     * @var int
     */
    public $validateRuleCount;
    protected $_name = [
        'catalogScores' => 'CatalogScores',
        'passRuleCount' => 'PassRuleCount',
        'totalScore' => 'TotalScore',
        'validateRuleCount' => 'ValidateRuleCount',
    ];

    public function validate()
    {
        if (\is_array($this->catalogScores)) {
            Model::validateArray($this->catalogScores);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->catalogScores) {
            if (\is_array($this->catalogScores)) {
                $res['CatalogScores'] = [];
                $n1 = 0;
                foreach ($this->catalogScores as $item1) {
                    $res['CatalogScores'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->passRuleCount) {
            $res['PassRuleCount'] = $this->passRuleCount;
        }

        if (null !== $this->totalScore) {
            $res['TotalScore'] = $this->totalScore;
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
        if (isset($map['CatalogScores'])) {
            if (!empty($map['CatalogScores'])) {
                $model->catalogScores = [];
                $n1 = 0;
                foreach ($map['CatalogScores'] as $item1) {
                    $model->catalogScores[$n1] = catalogScores::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PassRuleCount'])) {
            $model->passRuleCount = $map['PassRuleCount'];
        }

        if (isset($map['TotalScore'])) {
            $model->totalScore = $map['TotalScore'];
        }

        if (isset($map['ValidateRuleCount'])) {
            $model->validateRuleCount = $map['ValidateRuleCount'];
        }

        return $model;
    }
}
