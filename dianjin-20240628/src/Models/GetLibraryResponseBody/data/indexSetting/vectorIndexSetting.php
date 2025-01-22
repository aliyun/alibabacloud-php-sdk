<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\GetLibraryResponseBody\data\indexSetting;

use AlibabaCloud\Dara\Model;

class vectorIndexSetting extends Model
{
    /**
     * @var string
     */
    public $category;
    /**
     * @var string
     */
    public $embeddingType;
    /**
     * @var bool
     */
    public $enable;
    /**
     * @var float
     */
    public $rankThreshold;
    /**
     * @var int
     */
    public $topK;
    protected $_name = [
        'category'      => 'category',
        'embeddingType' => 'embeddingType',
        'enable'        => 'enable',
        'rankThreshold' => 'rankThreshold',
        'topK'          => 'topK',
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

        if (null !== $this->embeddingType) {
            $res['embeddingType'] = $this->embeddingType;
        }

        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }

        if (null !== $this->rankThreshold) {
            $res['rankThreshold'] = $this->rankThreshold;
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

        if (isset($map['embeddingType'])) {
            $model->embeddingType = $map['embeddingType'];
        }

        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }

        if (isset($map['rankThreshold'])) {
            $model->rankThreshold = $map['rankThreshold'];
        }

        if (isset($map['topK'])) {
            $model->topK = $map['topK'];
        }

        return $model;
    }
}
