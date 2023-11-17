<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XrEngine\V20230313\Models\PopQueryObjectGenerationProjectDetailResponseBody\data;

use AlibabaCloud\Tea\Model;

class dataset extends Model
{
    /**
     * @var mixed[]
     */
    public $buildResultUrl;
    protected $_name = [
        'buildResultUrl' => 'BuildResultUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->buildResultUrl) {
            $res['BuildResultUrl'] = $this->buildResultUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataset
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BuildResultUrl'])) {
            $model->buildResultUrl = $map['BuildResultUrl'];
        }

        return $model;
    }
}
