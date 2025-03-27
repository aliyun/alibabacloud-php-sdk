<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;

class CountTextRequest extends Model
{
    /**
     * @var string
     */
    public $generationSource;

    /**
     * @var string
     */
    public $industry;

    /**
     * @var string
     */
    public $publishStatus;

    /**
     * @var string
     */
    public $style;
    protected $_name = [
        'generationSource' => 'generationSource',
        'industry' => 'industry',
        'publishStatus' => 'publishStatus',
        'style' => 'style',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->generationSource) {
            $res['generationSource'] = $this->generationSource;
        }

        if (null !== $this->industry) {
            $res['industry'] = $this->industry;
        }

        if (null !== $this->publishStatus) {
            $res['publishStatus'] = $this->publishStatus;
        }

        if (null !== $this->style) {
            $res['style'] = $this->style;
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
        if (isset($map['generationSource'])) {
            $model->generationSource = $map['generationSource'];
        }

        if (isset($map['industry'])) {
            $model->industry = $map['industry'];
        }

        if (isset($map['publishStatus'])) {
            $model->publishStatus = $map['publishStatus'];
        }

        if (isset($map['style'])) {
            $model->style = $map['style'];
        }

        return $model;
    }
}
