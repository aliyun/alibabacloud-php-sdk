<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models;

use AlibabaCloud\Tea\Model;

class DeleteSetResponseBody extends Model
{
    /**
     * @var string
     */
    public $setId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'setId'     => 'SetId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->setId) {
            $res['SetId'] = $this->setId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteSetResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SetId'])) {
            $model->setId = $map['SetId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
