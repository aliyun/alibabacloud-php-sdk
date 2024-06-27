<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Tea\Model;

class DescribeSafConsoleResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $bizData;
    protected $_name = [
        'requestId' => 'RequestId',
        'bizData'   => 'bizData',
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
        if (null !== $this->bizData) {
            $res['bizData'] = $this->bizData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSafConsoleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['bizData'])) {
            if (!empty($map['bizData'])) {
                $model->bizData = $map['bizData'];
            }
        }

        return $model;
    }
}
