<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Uis\V20180821\Models;

use AlibabaCloud\Tea\Model;

class CreateDnatEntryResponseBody extends Model
{
    /**
     * @var string
     */
    public $uisDnatId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'uisDnatId' => 'UisDnatId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->uisDnatId) {
            $res['UisDnatId'] = $this->uisDnatId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDnatEntryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UisDnatId'])) {
            $model->uisDnatId = $map['UisDnatId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
