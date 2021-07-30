<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryCallInPoolTransferConfigResponseBody;

use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryCallInPoolTransferConfigResponseBody\data\details;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $calledRouteMode;

    /**
     * @var string
     */
    public $transferTimeout;

    /**
     * @var details[]
     */
    public $details;
    protected $_name = [
        'gmtCreate'       => 'GmtCreate',
        'calledRouteMode' => 'CalledRouteMode',
        'transferTimeout' => 'TransferTimeout',
        'details'         => 'Details',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->calledRouteMode) {
            $res['CalledRouteMode'] = $this->calledRouteMode;
        }
        if (null !== $this->transferTimeout) {
            $res['TransferTimeout'] = $this->transferTimeout;
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
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['CalledRouteMode'])) {
            $model->calledRouteMode = $map['CalledRouteMode'];
        }
        if (isset($map['TransferTimeout'])) {
            $model->transferTimeout = $map['TransferTimeout'];
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

        return $model;
    }
}
