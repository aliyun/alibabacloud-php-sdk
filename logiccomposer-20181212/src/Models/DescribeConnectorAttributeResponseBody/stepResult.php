<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Logiccomposer\V20181212\Models\DescribeConnectorAttributeResponseBody;

use AlibabaCloud\Tea\Model;

class stepResult extends Model
{
    /**
     * @var bool
     */
    public $hasNext;
    protected $_name = [
        'hasNext' => 'HasNext',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hasNext) {
            $res['HasNext'] = $this->hasNext;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stepResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HasNext'])) {
            $model->hasNext = $map['HasNext'];
        }

        return $model;
    }
}
