<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DescribeSlsDeliveryConfigResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DescribeSlsDeliveryConfigResponseBody\deliveryConfigs\logStores;

class deliveryConfigs extends Model
{
    /**
     * @var logStores[]
     */
    public $logStores;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $slsRegionId;
    protected $_name = [
        'logStores' => 'LogStores',
        'projectName' => 'ProjectName',
        'slsRegionId' => 'SlsRegionId',
    ];

    public function validate()
    {
        if (\is_array($this->logStores)) {
            Model::validateArray($this->logStores);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->logStores) {
            if (\is_array($this->logStores)) {
                $res['LogStores'] = [];
                $n1 = 0;
                foreach ($this->logStores as $item1) {
                    $res['LogStores'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        if (null !== $this->slsRegionId) {
            $res['SlsRegionId'] = $this->slsRegionId;
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
        if (isset($map['LogStores'])) {
            if (!empty($map['LogStores'])) {
                $model->logStores = [];
                $n1 = 0;
                foreach ($map['LogStores'] as $item1) {
                    $model->logStores[$n1] = logStores::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        if (isset($map['SlsRegionId'])) {
            $model->slsRegionId = $map['SlsRegionId'];
        }

        return $model;
    }
}
