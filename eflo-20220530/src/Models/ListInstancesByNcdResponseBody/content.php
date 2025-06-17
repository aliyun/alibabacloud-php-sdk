<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\ListInstancesByNcdResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eflo\V20220530\Models\ListInstancesByNcdResponseBody\content\instanceInfos;

class content extends Model
{
    /**
     * @var instanceInfos[]
     */
    public $instanceInfos;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var int
     */
    public $maxNcd;

    /**
     * @var string
     */
    public $sourceInstanceId;
    protected $_name = [
        'instanceInfos' => 'InstanceInfos',
        'instanceType' => 'InstanceType',
        'maxNcd' => 'MaxNcd',
        'sourceInstanceId' => 'SourceInstanceId',
    ];

    public function validate()
    {
        if (\is_array($this->instanceInfos)) {
            Model::validateArray($this->instanceInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceInfos) {
            if (\is_array($this->instanceInfos)) {
                $res['InstanceInfos'] = [];
                $n1 = 0;
                foreach ($this->instanceInfos as $item1) {
                    $res['InstanceInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->maxNcd) {
            $res['MaxNcd'] = $this->maxNcd;
        }

        if (null !== $this->sourceInstanceId) {
            $res['SourceInstanceId'] = $this->sourceInstanceId;
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
        if (isset($map['InstanceInfos'])) {
            if (!empty($map['InstanceInfos'])) {
                $model->instanceInfos = [];
                $n1 = 0;
                foreach ($map['InstanceInfos'] as $item1) {
                    $model->instanceInfos[$n1] = instanceInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['MaxNcd'])) {
            $model->maxNcd = $map['MaxNcd'];
        }

        if (isset($map['SourceInstanceId'])) {
            $model->sourceInstanceId = $map['SourceInstanceId'];
        }

        return $model;
    }
}
