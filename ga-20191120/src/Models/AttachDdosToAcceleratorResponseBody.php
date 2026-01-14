<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Dara\Model;

class AttachDdosToAcceleratorResponseBody extends Model
{
    /**
     * @var string
     */
    public $ddosId;

    /**
     * @var string
     */
    public $gaId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'ddosId' => 'DdosId',
        'gaId' => 'GaId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ddosId) {
            $res['DdosId'] = $this->ddosId;
        }

        if (null !== $this->gaId) {
            $res['GaId'] = $this->gaId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DdosId'])) {
            $model->ddosId = $map['DdosId'];
        }

        if (isset($map['GaId'])) {
            $model->gaId = $map['GaId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
