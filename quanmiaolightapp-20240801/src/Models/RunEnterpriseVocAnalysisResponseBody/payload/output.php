<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunEnterpriseVocAnalysisResponseBody\payload;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunEnterpriseVocAnalysisResponseBody\payload\output\filterResult;

class output extends Model
{
    /**
     * @var filterResult
     */
    public $filterResult;

    /**
     * @var string
     */
    public $reasonContent;

    /**
     * @var string
     */
    public $text;
    protected $_name = [
        'filterResult' => 'filterResult',
        'reasonContent' => 'reasonContent',
        'text' => 'text',
    ];

    public function validate()
    {
        if (null !== $this->filterResult) {
            $this->filterResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->filterResult) {
            $res['filterResult'] = null !== $this->filterResult ? $this->filterResult->toArray($noStream) : $this->filterResult;
        }

        if (null !== $this->reasonContent) {
            $res['reasonContent'] = $this->reasonContent;
        }

        if (null !== $this->text) {
            $res['text'] = $this->text;
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
        if (isset($map['filterResult'])) {
            $model->filterResult = filterResult::fromMap($map['filterResult']);
        }

        if (isset($map['reasonContent'])) {
            $model->reasonContent = $map['reasonContent'];
        }

        if (isset($map['text'])) {
            $model->text = $map['text'];
        }

        return $model;
    }
}
