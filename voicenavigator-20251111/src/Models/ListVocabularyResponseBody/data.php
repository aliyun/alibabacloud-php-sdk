<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\ListVocabularyResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\ListVocabularyResponseBody\data\vocabularies;

class data extends Model
{
    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var vocabularies[]
     */
    public $vocabularies;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'totalCount' => 'TotalCount',
        'vocabularies' => 'Vocabularies',
    ];

    public function validate()
    {
        if (\is_array($this->vocabularies)) {
            Model::validateArray($this->vocabularies);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->vocabularies) {
            if (\is_array($this->vocabularies)) {
                $res['Vocabularies'] = [];
                $n1 = 0;
                foreach ($this->vocabularies as $item1) {
                    $res['Vocabularies'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['Vocabularies'])) {
            if (!empty($map['Vocabularies'])) {
                $model->vocabularies = [];
                $n1 = 0;
                foreach ($map['Vocabularies'] as $item1) {
                    $model->vocabularies[$n1] = vocabularies::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
