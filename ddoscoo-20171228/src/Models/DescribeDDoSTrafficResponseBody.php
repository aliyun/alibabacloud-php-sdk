<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models;

use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeDDoSTrafficResponseBody\DDoSTrafficPoints;
use AlibabaCloud\Tea\Model;

class DescribeDDoSTrafficResponseBody extends Model
{
    /**
     * @var DDoSTrafficPoints[]
     */
    public $DDoSTrafficPoints;

    /**
     * @example 23482234
     *
     * @var int
     */
    public $defenseInBytes;

    /**
     * @example CF33B4C3-196E-4015-AADD-5CAD00057B80
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 19284762
     *
     * @var int
     */
    public $sourceInBytes;
    protected $_name = [
        'DDoSTrafficPoints' => 'DDoSTrafficPoints',
        'defenseInBytes'    => 'DefenseInBytes',
        'requestId'         => 'RequestId',
        'sourceInBytes'     => 'SourceInBytes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DDoSTrafficPoints) {
            $res['DDoSTrafficPoints'] = [];
            if (null !== $this->DDoSTrafficPoints && \is_array($this->DDoSTrafficPoints)) {
                $n = 0;
                foreach ($this->DDoSTrafficPoints as $item) {
                    $res['DDoSTrafficPoints'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return DescribeDDoSTrafficResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DDoSTrafficPoints'])) {
            if (!empty($map['DDoSTrafficPoints'])) {
                $model->DDoSTrafficPoints = [];
                $n                        = 0;
                foreach ($map['DDoSTrafficPoints'] as $item) {
                    $model->DDoSTrafficPoints[$n++] = null !== $item ? DDoSTrafficPoints::fromMap($item) : $item;
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
