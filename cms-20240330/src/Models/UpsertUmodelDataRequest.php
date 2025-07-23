<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Tea\Model;

class UpsertUmodelDataRequest extends Model
{
    /**
     * @var mixed[]
     */
    public $elements;

    /**
     * @example Upsert
     *
     * @var string
     */
    public $method;
    protected $_name = [
        'elements' => 'elements',
        'method' => 'method',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->elements) {
            $res['elements'] = $this->elements;
        }
        if (null !== $this->method) {
            $res['method'] = $this->method;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpsertUmodelDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['elements'])) {
            if (!empty($map['elements'])) {
                $model->elements = $map['elements'];
            }
        }
        if (isset($map['method'])) {
            $model->method = $map['method'];
        }

        return $model;
    }
}
