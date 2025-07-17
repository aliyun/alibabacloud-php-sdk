<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Tea\Model;

class CreateHttpApiOperationRequest extends Model
{
    /**
     * @description List of operation definitions.
     *
     * @var HttpApiOperation[]
     */
    public $operations;
    protected $_name = [
        'operations' => 'operations',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->operations) {
            $res['operations'] = [];
            if (null !== $this->operations && \is_array($this->operations)) {
                $n = 0;
                foreach ($this->operations as $item) {
                    $res['operations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateHttpApiOperationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['operations'])) {
            if (!empty($map['operations'])) {
                $model->operations = [];
                $n = 0;
                foreach ($map['operations'] as $item) {
                    $model->operations[$n++] = null !== $item ? HttpApiOperation::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
