<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class ModifyCasterComponentResponseBody extends Model
{
    /**
     * @description The ID of the component. You can use the ID as a request parameter in the API operation that is called to query components in a production studio.
     *
     * @example 05ab713c-676e-49c0-96ce-cc408da1****
     *
     * @var string
     */
    public $componentId;

    /**
     * @description The request ID.
     *
     * @example 16A96B9A-F203-4EC5-8E43-CB92E68F4CD8
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'componentId' => 'ComponentId',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->componentId) {
            $res['ComponentId'] = $this->componentId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyCasterComponentResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComponentId'])) {
            $model->componentId = $map['ComponentId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
