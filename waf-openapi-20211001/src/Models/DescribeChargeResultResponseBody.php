<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeChargeResultResponseBody\moduleDetails;

class DescribeChargeResultResponseBody extends Model
{
    /**
     * @var moduleDetails[]
     */
    public $moduleDetails;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var float
     */
    public $totalSeCu;
    protected $_name = [
        'moduleDetails' => 'ModuleDetails',
        'requestId' => 'RequestId',
        'totalSeCu' => 'TotalSeCu',
    ];

    public function validate()
    {
        if (\is_array($this->moduleDetails)) {
            Model::validateArray($this->moduleDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->moduleDetails) {
            if (\is_array($this->moduleDetails)) {
                $res['ModuleDetails'] = [];
                $n1 = 0;
                foreach ($this->moduleDetails as $item1) {
                    $res['ModuleDetails'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalSeCu) {
            $res['TotalSeCu'] = $this->totalSeCu;
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
        if (isset($map['ModuleDetails'])) {
            if (!empty($map['ModuleDetails'])) {
                $model->moduleDetails = [];
                $n1 = 0;
                foreach ($map['ModuleDetails'] as $item1) {
                    $model->moduleDetails[$n1] = moduleDetails::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalSeCu'])) {
            $model->totalSeCu = $map['TotalSeCu'];
        }

        return $model;
    }
}
