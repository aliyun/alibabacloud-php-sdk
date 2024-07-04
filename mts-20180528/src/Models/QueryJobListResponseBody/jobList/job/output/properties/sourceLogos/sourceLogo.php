<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20180528\Models\QueryJobListResponseBody\jobList\job\output\properties\sourceLogos;

use AlibabaCloud\Tea\Model;

class sourceLogo extends Model
{
    /**
     * @var string
     */
    public $source;
    protected $_name = [
        'source' => 'Source',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sourceLogo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        return $model;
    }
}
