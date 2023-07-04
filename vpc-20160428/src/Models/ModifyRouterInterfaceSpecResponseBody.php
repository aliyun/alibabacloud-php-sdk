<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class ModifyRouterInterfaceSpecResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 4EC47282-1B74-4534-BD0E-403F3EE64CAF
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The specification of the router interface. Valid values:
     *
     *   **Mini.2**: 2 Mbit/s
     *   **Mini.5**: 5 Mbit/s
     *   **Small.1**: 10 Mbit/s
     *   **Small.2**: 20 Mbit/s
     *   **Small.5**: 50 Mbit/s
     *   **Middle.1**: 100 Mbit/s
     *   **Middle.2**: 200 Mbit/s
     *   **Middle.5**: 500 Mbit/s
     *   **Large.1**: 1,000 Mbit/s
     *   **Large.2**: 2,000 Mbit/s
     *   **Large.5**: 5,000 Mbit/s
     *   **Xlarge.1**: 10,000 Mbit/s
     *
     * @example Small.1
     *
     * @var string
     */
    public $spec;
    protected $_name = [
        'requestId' => 'RequestId',
        'spec'      => 'Spec',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyRouterInterfaceSpecResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }

        return $model;
    }
}
