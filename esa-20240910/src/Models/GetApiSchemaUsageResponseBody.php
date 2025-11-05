<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetApiSchemaUsageResponseBody\usages;

class GetApiSchemaUsageResponseBody extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $instanceUsage;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var usages[]
     */
    public $usages;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'instanceUsage' => 'InstanceUsage',
        'requestId' => 'RequestId',
        'usages' => 'Usages',
    ];

    public function validate()
    {
        if (\is_array($this->usages)) {
            Model::validateArray($this->usages);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceUsage) {
            $res['InstanceUsage'] = $this->instanceUsage;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->usages) {
            if (\is_array($this->usages)) {
                $res['Usages'] = [];
                $n1 = 0;
                foreach ($this->usages as $item1) {
                    $res['Usages'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceUsage'])) {
            $model->instanceUsage = $map['InstanceUsage'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Usages'])) {
            if (!empty($map['Usages'])) {
                $model->usages = [];
                $n1 = 0;
                foreach ($map['Usages'] as $item1) {
                    $model->usages[$n1] = usages::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
