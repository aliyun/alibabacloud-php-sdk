<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeDDoSTrafficResponseBody\DDoSTrafficPoints;

class DescribeDDoSTrafficResponseBody extends Model
{
    /**
     * @var DDoSTrafficPoints[]
     */
    public $DDoSTrafficPoints;

    /**
     * @var int
     */
    public $defenseInBytes;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $sourceInBytes;
    protected $_name = [
        'DDoSTrafficPoints' => 'DDoSTrafficPoints',
        'defenseInBytes' => 'DefenseInBytes',
        'requestId' => 'RequestId',
        'sourceInBytes' => 'SourceInBytes',
    ];

    public function validate()
    {
        if (\is_array($this->DDoSTrafficPoints)) {
            Model::validateArray($this->DDoSTrafficPoints);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DDoSTrafficPoints) {
            if (\is_array($this->DDoSTrafficPoints)) {
                $res['DDoSTrafficPoints'] = [];
                $n1 = 0;
                foreach ($this->DDoSTrafficPoints as $item1) {
                    $res['DDoSTrafficPoints'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->defenseInBytes) {
            $res['DefenseInBytes'] = $this->defenseInBytes;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->sourceInBytes) {
            $res['SourceInBytes'] = $this->sourceInBytes;
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
        if (isset($map['DDoSTrafficPoints'])) {
            if (!empty($map['DDoSTrafficPoints'])) {
                $model->DDoSTrafficPoints = [];
                $n1 = 0;
                foreach ($map['DDoSTrafficPoints'] as $item1) {
                    $model->DDoSTrafficPoints[$n1++] = DDoSTrafficPoints::fromMap($item1);
                }
            }
        }

        if (isset($map['DefenseInBytes'])) {
            $model->defenseInBytes = $map['DefenseInBytes'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SourceInBytes'])) {
            $model->sourceInBytes = $map['SourceInBytes'];
        }

        return $model;
    }
}
