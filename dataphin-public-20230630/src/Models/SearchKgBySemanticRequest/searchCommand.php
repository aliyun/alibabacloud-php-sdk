<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\SearchKgBySemanticRequest;

use AlibabaCloud\Dara\Model;

class searchCommand extends Model
{
    /**
     * @var string[]
     */
    public $entityTypeCodes;

    /**
     * @var float
     */
    public $minSimilarity;

    /**
     * @var string
     */
    public $propertyCode;

    /**
     * @var string
     */
    public $queryText;

    /**
     * @var int
     */
    public $topK;
    protected $_name = [
        'entityTypeCodes' => 'EntityTypeCodes',
        'minSimilarity' => 'MinSimilarity',
        'propertyCode' => 'PropertyCode',
        'queryText' => 'QueryText',
        'topK' => 'TopK',
    ];

    public function validate()
    {
        if (\is_array($this->entityTypeCodes)) {
            Model::validateArray($this->entityTypeCodes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->entityTypeCodes) {
            if (\is_array($this->entityTypeCodes)) {
                $res['EntityTypeCodes'] = [];
                $n1 = 0;
                foreach ($this->entityTypeCodes as $item1) {
                    $res['EntityTypeCodes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->minSimilarity) {
            $res['MinSimilarity'] = $this->minSimilarity;
        }

        if (null !== $this->propertyCode) {
            $res['PropertyCode'] = $this->propertyCode;
        }

        if (null !== $this->queryText) {
            $res['QueryText'] = $this->queryText;
        }

        if (null !== $this->topK) {
            $res['TopK'] = $this->topK;
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
        if (isset($map['EntityTypeCodes'])) {
            if (!empty($map['EntityTypeCodes'])) {
                $model->entityTypeCodes = [];
                $n1 = 0;
                foreach ($map['EntityTypeCodes'] as $item1) {
                    $model->entityTypeCodes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MinSimilarity'])) {
            $model->minSimilarity = $map['MinSimilarity'];
        }

        if (isset($map['PropertyCode'])) {
            $model->propertyCode = $map['PropertyCode'];
        }

        if (isset($map['QueryText'])) {
            $model->queryText = $map['QueryText'];
        }

        if (isset($map['TopK'])) {
            $model->topK = $map['TopK'];
        }

        return $model;
    }
}
