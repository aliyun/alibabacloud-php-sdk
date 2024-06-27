<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Tea\Model;

class ModifyEventStatusResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $resultObject;
    protected $_name = [
        'requestId'    => 'requestId',
        'resultObject' => 'resultObject',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->resultObject) {
            $res['resultObject'] = $this->resultObject;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyEventStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['resultObject'])) {
            $model->resultObject = $map['resultObject'];
        }

        return $model;
    }
}
