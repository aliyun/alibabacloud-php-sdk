<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\SearchKgBySemanticResponseBody\data;

use AlibabaCloud\Dara\Model;

class searchResults extends Model
{
    /**
     * @var string
     */
    public $itemId;

    /**
     * @var string
     */
    public $itemTypeCode;

    /**
     * @var string
     */
    public $matchedPropertyCode;

    /**
     * @var string
     */
    public $matchedPropertyValue;

    /**
     * @var float
     */
    public $similarityScore;
    protected $_name = [
        'itemId' => 'ItemId',
        'itemTypeCode' => 'ItemTypeCode',
        'matchedPropertyCode' => 'MatchedPropertyCode',
        'matchedPropertyValue' => 'MatchedPropertyValue',
        'similarityScore' => 'SimilarityScore',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }

        if (null !== $this->itemTypeCode) {
            $res['ItemTypeCode'] = $this->itemTypeCode;
        }

        if (null !== $this->matchedPropertyCode) {
            $res['MatchedPropertyCode'] = $this->matchedPropertyCode;
        }

        if (null !== $this->matchedPropertyValue) {
            $res['MatchedPropertyValue'] = $this->matchedPropertyValue;
        }

        if (null !== $this->similarityScore) {
            $res['SimilarityScore'] = $this->similarityScore;
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
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }

        if (isset($map['ItemTypeCode'])) {
            $model->itemTypeCode = $map['ItemTypeCode'];
        }

        if (isset($map['MatchedPropertyCode'])) {
            $model->matchedPropertyCode = $map['MatchedPropertyCode'];
        }

        if (isset($map['MatchedPropertyValue'])) {
            $model->matchedPropertyValue = $map['MatchedPropertyValue'];
        }

        if (isset($map['SimilarityScore'])) {
            $model->similarityScore = $map['SimilarityScore'];
        }

        return $model;
    }
}
