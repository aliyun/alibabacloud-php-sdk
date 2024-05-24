<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Tea\Model;

class CodeupEventPayload extends Model
{
    /**
     * @var int[]
     */
    public $originalPayload;
    protected $_name = [
        'originalPayload' => 'originalPayload',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->originalPayload) {
            $res['originalPayload'] = $this->originalPayload;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CodeupEventPayload
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['originalPayload'])) {
            $model->originalPayload = $map['originalPayload'];
        }

        return $model;
    }
}
