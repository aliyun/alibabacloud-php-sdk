<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\RunDataAnalysisResponseBody\data;

use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\RunDataAnalysisResponseBody\data\visualization\data;
use AlibabaCloud\Tea\Model;

class visualization extends Model
{
    /**
     * @var data
     */
    public $data;

    /**
     * @var string
     */
    public $text;
    protected $_name = [
        'data' => 'data',
        'text' => 'text',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->text) {
            $res['text'] = $this->text;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return visualization
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['data'])) {
            $model->data = data::fromMap($map['data']);
        }
        if (isset($map['text'])) {
            $model->text = $map['text'];
        }

        return $model;
    }
}
