<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models;

use AlibabaCloud\Tea\Model;

class InvokeAnomalyDiagnosisRequest extends Model
{
    /**
     * @example 8047d763-5465-4a8c-b1cd-23f5a8ba2594
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'uuid' => 'uuid',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->uuid) {
            $res['uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InvokeAnomalyDiagnosisRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['uuid'])) {
            $model->uuid = $map['uuid'];
        }

        return $model;
    }
}
