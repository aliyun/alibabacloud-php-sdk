<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Tea\Model;

class ListQueryProcessorsRequest extends Model
{
    /**
     * @var int
     */
    public $isActive;
    protected $_name = [
        'isActive' => 'isActive',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isActive) {
            $res['isActive'] = $this->isActive;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListQueryProcessorsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['isActive'])) {
            $model->isActive = $map['isActive'];
        }

        return $model;
    }
}
