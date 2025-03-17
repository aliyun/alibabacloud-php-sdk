<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\SelectGatewaySlbResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The ID of the SLB instance.
     *
     * @example lb-bp14lqiw5n96hq2****
     *
     * @var string
     */
    public $slbId;

    /**
     * @description The name of the SLB instance.
     *
     * @example MseGatewaySlb-gw
     *
     * @var string
     */
    public $slbName;
    protected $_name = [
        'slbId' => 'SlbId',
        'slbName' => 'SlbName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->slbId) {
            $res['SlbId'] = $this->slbId;
        }
        if (null !== $this->slbName) {
            $res['SlbName'] = $this->slbName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SlbId'])) {
            $model->slbId = $map['SlbId'];
        }
        if (isset($map['SlbName'])) {
            $model->slbName = $map['SlbName'];
        }

        return $model;
    }
}
