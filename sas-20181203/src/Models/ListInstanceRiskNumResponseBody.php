<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListInstanceRiskNumResponseBody\instanceRiskNum;
use AlibabaCloud\Tea\Model;

class ListInstanceRiskNumResponseBody extends Model
{
    /**
     * @var instanceRiskNum[]
     */
    public $instanceRiskNum;

    /**
     * @example 291B49F9-1685-4005-9D34-606B6F78****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceRiskNum' => 'InstanceRiskNum',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceRiskNum) {
            $res['InstanceRiskNum'] = [];
            if (null !== $this->instanceRiskNum && \is_array($this->instanceRiskNum)) {
                $n = 0;
                foreach ($this->instanceRiskNum as $item) {
                    $res['InstanceRiskNum'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInstanceRiskNumResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceRiskNum'])) {
            if (!empty($map['InstanceRiskNum'])) {
                $model->instanceRiskNum = [];
                $n                      = 0;
                foreach ($map['InstanceRiskNum'] as $item) {
                    $model->instanceRiskNum[$n++] = null !== $item ? instanceRiskNum::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
