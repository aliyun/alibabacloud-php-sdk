<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\CreateLibraryRequest\indexSetting;

use AlibabaCloud\Dara\Model;

class textIndexSetting extends Model
{
    /**
     * @var string
     */
    public $category;
    /**
     * @var bool
     */
    public $enable;
    /**
     * @var string
     */
    public $indexAnalyzer;
    /**
     * @var float
     */
    public $rankThreshold;
    /**
     * @var string
     */
    public $searchAnalyzer;
    /**
     * @var int
     */
    public $topK;
    protected $_name = [
        'category'       => 'category',
        'enable'         => 'enable',
        'indexAnalyzer'  => 'indexAnalyzer',
        'rankThreshold'  => 'rankThreshold',
        'searchAnalyzer' => 'searchAnalyzer',
        'topK'           => 'topK',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->category) {
            $res['category'] = $this->category;
        }

        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }

        if (null !== $this->indexAnalyzer) {
            $res['indexAnalyzer'] = $this->indexAnalyzer;
        }

        if (null !== $this->rankThreshold) {
            $res['rankThreshold'] = $this->rankThreshold;
        }

        if (null !== $this->searchAnalyzer) {
            $res['searchAnalyzer'] = $this->searchAnalyzer;
        }

        if (null !== $this->topK) {
            $res['topK'] = $this->topK;
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
        if (isset($map['category'])) {
            $model->category = $map['category'];
        }

        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }

        if (isset($map['indexAnalyzer'])) {
            $model->indexAnalyzer = $map['indexAnalyzer'];
        }

        if (isset($map['rankThreshold'])) {
            $model->rankThreshold = $map['rankThreshold'];
        }

        if (isset($map['searchAnalyzer'])) {
            $model->searchAnalyzer = $map['searchAnalyzer'];
        }

        if (isset($map['topK'])) {
            $model->topK = $map['topK'];
        }

        return $model;
    }
}
