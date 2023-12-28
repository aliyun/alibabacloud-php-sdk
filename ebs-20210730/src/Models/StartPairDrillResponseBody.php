<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models;

use AlibabaCloud\Tea\Model;

class StartPairDrillResponseBody extends Model
{
    /**
     * @description The drill ID.
     *
     * @example drill-xxx
     *
     * @var string
     */
    public $drillId;

    /**
     * @description The request ID.
     *
     * @example C123F94F-4E38-19AE-942A-A8D6F44F****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'drillId'   => 'DrillId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->drillId) {
            $res['DrillId'] = $this->drillId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartPairDrillResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DrillId'])) {
            $model->drillId = $map['DrillId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
