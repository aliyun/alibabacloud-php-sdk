<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class ListEnterpriseAccelerateTargetsResponseBody extends Model
{
    /**
     * @example eap-7fed37a757a0de24
     *
     * @var string
     */
    public $eapId;

    /**
     * @example 529F755E-2E75-52EC-9C2E-6293FB8BF986
     *
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $targets;

    /**
     * @example 103
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'eapId' => 'EapId',
        'requestId' => 'RequestId',
        'targets' => 'Targets',
        'total' => 'Total',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->eapId) {
            $res['EapId'] = $this->eapId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->targets) {
            $res['Targets'] = $this->targets;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListEnterpriseAccelerateTargetsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EapId'])) {
            $model->eapId = $map['EapId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Targets'])) {
            if (!empty($map['Targets'])) {
                $model->targets = $map['Targets'];
            }
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
