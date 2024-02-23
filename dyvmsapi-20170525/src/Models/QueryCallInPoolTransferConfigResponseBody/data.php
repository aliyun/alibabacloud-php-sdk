<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryCallInPoolTransferConfigResponseBody;

use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryCallInPoolTransferConfigResponseBody\data\details;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The call mode. Valid values:
     *
     *   **roundRobin**
     *   **random**
     *
     * @example random
     *
     * @var string
     */
    public $calledRouteMode;

    /**
     * @description The details of the response parameters.
     *
     * @var details[]
     */
    public $details;

    /**
     * @description The time when the call transfer task was created.
     *
     * @example 1623137002000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @description The timeout period for transferring the call.
     *
     * @example 30
     *
     * @var string
     */
    public $transferTimeout;
    protected $_name = [
        'calledRouteMode' => 'CalledRouteMode',
        'details'         => 'Details',
        'gmtCreate'       => 'GmtCreate',
        'transferTimeout' => 'TransferTimeout',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->calledRouteMode) {
            $res['CalledRouteMode'] = $this->calledRouteMode;
        }
        if (null !== $this->details) {
            $res['Details'] = [];
            if (null !== $this->details && \is_array($this->details)) {
                $n = 0;
                foreach ($this->details as $item) {
                    $res['Details'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->transferTimeout) {
            $res['TransferTimeout'] = $this->transferTimeout;
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
        if (isset($map['CalledRouteMode'])) {
            $model->calledRouteMode = $map['CalledRouteMode'];
        }
        if (isset($map['Details'])) {
            if (!empty($map['Details'])) {
                $model->details = [];
                $n              = 0;
                foreach ($map['Details'] as $item) {
                    $model->details[$n++] = null !== $item ? details::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['TransferTimeout'])) {
            $model->transferTimeout = $map['TransferTimeout'];
        }

        return $model;
    }
}
