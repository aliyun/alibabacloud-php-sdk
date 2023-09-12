<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Esserverless\V20230627\Models;

use AlibabaCloud\Tea\Model;

class GetAppRequest extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $detailed;
    protected $_name = [
        'detailed' => 'detailed',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->detailed) {
            $res['detailed'] = $this->detailed;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAppRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['detailed'])) {
            $model->detailed = $map['detailed'];
        }

        return $model;
    }
}
