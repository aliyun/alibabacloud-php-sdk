<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class ExistRunningSQLEngineResponseBody extends Model
{
    /**
     * @description Indicates whether a running SQL engine exists in the resource group.
     *
     * Valid values:
     *
     *   **True**
     *   **False**
     *
     * @example True
     *
     * @var bool
     */
    public $data;

    /**
     * @description The request ID.
     *
     * @example FA675D68-14A4-5D9C-8820-92537D9F447E
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'data'      => 'Data',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExistRunningSQLEngineResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
