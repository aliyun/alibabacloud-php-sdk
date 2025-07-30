<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class GetJobSanityCheckResultRequest extends Model
{
    /**
     * @description The nth time for which the job sanity check is performed.
     *
     * This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $sanityCheckNumber;

    /**
     * @description The phase in which the job sanity check is performed.
     *
     *   CheckInit
     *   DeviceCheck
     *   SingleNodeCommCheck
     *   TwoNodeCommCheck
     *   AllNodeCommCheck
     *
     * @example DeviceCheck
     *
     * @var string
     */
    public $sanityCheckPhase;

    /**
     * @description The token information for job sharing. For more information about how to obtain the token information, see [GetToken](https://help.aliyun.com/document_detail/2557812.html).
     *
     * @example eyJhbG******zI1NiIsInR5cCI6IkpXVCJ9.eyJle****jE3MDk1Mzk0NDIsImlhdCI6MTcwODkzNDY0MiwidXNlcl9pZCI6IjE3NTgwNTQxNjI0Mzg2NTUiLCJ0YXJnZXRfaWQiOiJkbGM1OGh1a2xyYzZwdGMyIiwidGFyZ2V0X3R5cGUiOiJqb2IifQ.GNL7jo6****mgKKv0QeGIYgvBufSU-PH_EQttX****
     *
     * @var string
     */
    public $token;
    protected $_name = [
        'sanityCheckNumber' => 'SanityCheckNumber',
        'sanityCheckPhase' => 'SanityCheckPhase',
        'token' => 'Token',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->sanityCheckNumber) {
            $res['SanityCheckNumber'] = $this->sanityCheckNumber;
        }
        if (null !== $this->sanityCheckPhase) {
            $res['SanityCheckPhase'] = $this->sanityCheckPhase;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetJobSanityCheckResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SanityCheckNumber'])) {
            $model->sanityCheckNumber = $map['SanityCheckNumber'];
        }
        if (isset($map['SanityCheckPhase'])) {
            $model->sanityCheckPhase = $map['SanityCheckPhase'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        return $model;
    }
}
