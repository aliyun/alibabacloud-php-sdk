<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class CheckInstanceSupportStageNameResponseBody extends Model
{
    /**
     * @var bool
     */
    public $isSupport;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'isSupport' => 'IsSupport',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isSupport) {
            $res['IsSupport'] = $this->isSupport;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckInstanceSupportStageNameResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsSupport'])) {
            $model->isSupport = $map['IsSupport'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
