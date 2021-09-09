<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDT\V20210813\Models;

use AlibabaCloud\Tea\Model;

class GetCdtServiceStatusResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $enabled;
    protected $_name = [
        'requestId' => 'RequestId',
        'enabled'   => 'Enabled',
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
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCdtServiceStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        return $model;
    }
}
