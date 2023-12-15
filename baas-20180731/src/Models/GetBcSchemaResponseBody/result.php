<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\GetBcSchemaResponseBody;

use AlibabaCloud\SDK\Baas\V20180731\Models\GetBcSchemaResponseBody\result\responses;
use AlibabaCloud\SDK\Baas\V20180731\Models\GetBcSchemaResponseBody\result\schema;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var responses[]
     */
    public $responses;

    /**
     * @var schema
     */
    public $schema;
    protected $_name = [
        'responses' => 'Responses',
        'schema'    => 'Schema',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->responses) {
            $res['Responses'] = [];
            if (null !== $this->responses && \is_array($this->responses)) {
                $n = 0;
                foreach ($this->responses as $item) {
                    $res['Responses'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->schema) {
            $res['Schema'] = null !== $this->schema ? $this->schema->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Responses'])) {
            if (!empty($map['Responses'])) {
                $model->responses = [];
                $n                = 0;
                foreach ($map['Responses'] as $item) {
                    $model->responses[$n++] = null !== $item ? responses::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Schema'])) {
            $model->schema = schema::fromMap($map['Schema']);
        }

        return $model;
    }
}
