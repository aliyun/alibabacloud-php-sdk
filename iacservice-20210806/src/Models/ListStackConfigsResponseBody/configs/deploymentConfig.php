<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\ListStackConfigsResponseBody\configs;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListStackConfigsResponseBody\configs\deploymentConfig\deployment;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListStackConfigsResponseBody\configs\deploymentConfig\publishOutput;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListStackConfigsResponseBody\configs\deploymentConfig\upstreamInput;

class deploymentConfig extends Model
{
    /**
     * @var deployment[]
     */
    public $deployment;

    /**
     * @var publishOutput[]
     */
    public $publishOutput;

    /**
     * @var upstreamInput[]
     */
    public $upstreamInput;
    protected $_name = [
        'deployment' => 'deployment',
        'publishOutput' => 'publishOutput',
        'upstreamInput' => 'upstreamInput',
    ];

    public function validate()
    {
        if (\is_array($this->deployment)) {
            Model::validateArray($this->deployment);
        }
        if (\is_array($this->publishOutput)) {
            Model::validateArray($this->publishOutput);
        }
        if (\is_array($this->upstreamInput)) {
            Model::validateArray($this->upstreamInput);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deployment) {
            if (\is_array($this->deployment)) {
                $res['deployment'] = [];
                $n1 = 0;
                foreach ($this->deployment as $item1) {
                    $res['deployment'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->publishOutput) {
            if (\is_array($this->publishOutput)) {
                $res['publishOutput'] = [];
                $n1 = 0;
                foreach ($this->publishOutput as $item1) {
                    $res['publishOutput'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->upstreamInput) {
            if (\is_array($this->upstreamInput)) {
                $res['upstreamInput'] = [];
                $n1 = 0;
                foreach ($this->upstreamInput as $item1) {
                    $res['upstreamInput'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['deployment'])) {
            if (!empty($map['deployment'])) {
                $model->deployment = [];
                $n1 = 0;
                foreach ($map['deployment'] as $item1) {
                    $model->deployment[$n1] = deployment::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['publishOutput'])) {
            if (!empty($map['publishOutput'])) {
                $model->publishOutput = [];
                $n1 = 0;
                foreach ($map['publishOutput'] as $item1) {
                    $model->publishOutput[$n1] = publishOutput::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['upstreamInput'])) {
            if (!empty($map['upstreamInput'])) {
                $model->upstreamInput = [];
                $n1 = 0;
                foreach ($map['upstreamInput'] as $item1) {
                    $model->upstreamInput[$n1] = upstreamInput::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
