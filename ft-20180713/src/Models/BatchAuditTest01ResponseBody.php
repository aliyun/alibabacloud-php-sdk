<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ft\V20180713\Models;

use AlibabaCloud\SDK\Ft\V20180713\Models\BatchAuditTest01ResponseBody\demo01;
use AlibabaCloud\Tea\Model;

class BatchAuditTest01ResponseBody extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var demo01
     */
    public $demo01;
    protected $_name = [
        'name'      => 'Name',
        'requestId' => 'RequestId',
        'demo01'    => 'Demo01',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->demo01) {
            $res['Demo01'] = null !== $this->demo01 ? $this->demo01->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchAuditTest01ResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Demo01'])) {
            $model->demo01 = demo01::fromMap($map['Demo01']);
        }

        return $model;
    }
}
