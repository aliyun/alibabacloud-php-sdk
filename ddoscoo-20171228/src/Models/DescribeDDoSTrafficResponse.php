<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models;

use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeDDoSTrafficResponse\DDoSTrafficPoints;
use AlibabaCloud\Tea\Model;

class DescribeDDoSTrafficResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $defenseInBytes;

    /**
     * @var int
     */
    public $sourceInBytes;

    /**
     * @var DDoSTrafficPoints[]
     */
    public $DDoSTrafficPoints;
    protected $_name = [
        'requestId'         => 'RequestId',
        'defenseInBytes'    => 'DefenseInBytes',
        'sourceInBytes'     => 'SourceInBytes',
        'DDoSTrafficPoints' => 'DDoSTrafficPoints',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('defenseInBytes', $this->defenseInBytes, true);
        Model::validateRequired('sourceInBytes', $this->sourceInBytes, true);
        Model::validateRequired('DDoSTrafficPoints', $this->DDoSTrafficPoints, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->defenseInBytes) {
            $res['DefenseInBytes'] = $this->defenseInBytes;
        }
        if (null !== $this->sourceInBytes) {
            $res['SourceInBytes'] = $this->sourceInBytes;
        }
        if (null !== $this->DDoSTrafficPoints) {
            $res['DDoSTrafficPoints'] = [];
            if (null !== $this->DDoSTrafficPoints && \is_array($this->DDoSTrafficPoints)) {
                $n = 0;
                foreach ($this->DDoSTrafficPoints as $item) {
                    $res['DDoSTrafficPoints'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDDoSTrafficResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DefenseInBytes'])) {
            $model->defenseInBytes = $map['DefenseInBytes'];
        }
        if (isset($map['SourceInBytes'])) {
            $model->sourceInBytes = $map['SourceInBytes'];
        }
        if (isset($map['DDoSTrafficPoints'])) {
            if (!empty($map['DDoSTrafficPoints'])) {
                $model->DDoSTrafficPoints = [];
                $n                        = 0;
                foreach ($map['DDoSTrafficPoints'] as $item) {
                    $model->DDoSTrafficPoints[$n++] = null !== $item ? DDoSTrafficPoints::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
