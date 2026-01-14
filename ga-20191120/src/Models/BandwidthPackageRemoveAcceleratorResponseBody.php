<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Dara\Model;

class BandwidthPackageRemoveAcceleratorResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $accelerators;

    /**
     * @var string
     */
    public $bandwidthPackageId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'accelerators' => 'Accelerators',
        'bandwidthPackageId' => 'BandwidthPackageId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->accelerators)) {
            Model::validateArray($this->accelerators);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accelerators) {
            if (\is_array($this->accelerators)) {
                $res['Accelerators'] = [];
                $n1 = 0;
                foreach ($this->accelerators as $item1) {
                    $res['Accelerators'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->bandwidthPackageId) {
            $res['BandwidthPackageId'] = $this->bandwidthPackageId;
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
        if (isset($map['Accelerators'])) {
            if (!empty($map['Accelerators'])) {
                $model->accelerators = [];
                $n1 = 0;
                foreach ($map['Accelerators'] as $item1) {
                    $model->accelerators[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['BandwidthPackageId'])) {
            $model->bandwidthPackageId = $map['BandwidthPackageId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
