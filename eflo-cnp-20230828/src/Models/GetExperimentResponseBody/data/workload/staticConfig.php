<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocnp\V20230828\Models\GetExperimentResponseBody\data\workload;

use AlibabaCloud\Dara\Model;

class staticConfig extends Model
{
    /**
     * @var string
     */
    public $frameWork;

    /**
     * @var string
     */
    public $os;

    /**
     * @var string
     */
    public $parameters;

    /**
     * @var string
     */
    public $softwareStack;
    protected $_name = [
        'frameWork' => 'FrameWork',
        'os' => 'Os',
        'parameters' => 'Parameters',
        'softwareStack' => 'SoftwareStack',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->frameWork) {
            $res['FrameWork'] = $this->frameWork;
        }

        if (null !== $this->os) {
            $res['Os'] = $this->os;
        }

        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
        }

        if (null !== $this->softwareStack) {
            $res['SoftwareStack'] = $this->softwareStack;
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
        if (isset($map['FrameWork'])) {
            $model->frameWork = $map['FrameWork'];
        }

        if (isset($map['Os'])) {
            $model->os = $map['Os'];
        }

        if (isset($map['Parameters'])) {
            $model->parameters = $map['Parameters'];
        }

        if (isset($map['SoftwareStack'])) {
            $model->softwareStack = $map['SoftwareStack'];
        }

        return $model;
    }
}
