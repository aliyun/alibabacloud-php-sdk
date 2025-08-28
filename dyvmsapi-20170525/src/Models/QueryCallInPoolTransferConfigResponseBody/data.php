<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryCallInPoolTransferConfigResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryCallInPoolTransferConfigResponseBody\data\details;

class data extends Model
{
    /**
     * @var string
     */
    public $calledRouteMode;

    /**
     * @var details[]
     */
    public $details;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $transferTimeout;
    protected $_name = [
        'calledRouteMode' => 'CalledRouteMode',
        'details' => 'Details',
        'gmtCreate' => 'GmtCreate',
        'transferTimeout' => 'TransferTimeout',
    ];

    public function validate()
    {
        if (\is_array($this->details)) {
            Model::validateArray($this->details);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->calledRouteMode) {
            $res['CalledRouteMode'] = $this->calledRouteMode;
        }

        if (null !== $this->details) {
            if (\is_array($this->details)) {
                $res['Details'] = [];
                $n1 = 0;
                foreach ($this->details as $item1) {
                    $res['Details'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CalledRouteMode'])) {
            $model->calledRouteMode = $map['CalledRouteMode'];
        }

        if (isset($map['Details'])) {
            if (!empty($map['Details'])) {
                $model->details = [];
                $n1 = 0;
                foreach ($map['Details'] as $item1) {
                    $model->details[$n1] = details::fromMap($item1);
                    ++$n1;
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
