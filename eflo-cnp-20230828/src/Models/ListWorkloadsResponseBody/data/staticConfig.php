<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocnp\V20230828\Models\ListWorkloadsResponseBody\data;

use AlibabaCloud\Tea\Model;

class staticConfig extends Model
{
    /**
     * @example PyTorch
     *
     * @var string
     */
    public $frameWork;

    /**
     * @example linux
     *
     * @var string
     */
    public $os;

    /**
     * @example 7B
     *
     * @var string
     */
    public $parameters;

    /**
     * @example python
     *
     * @var string
     */
    public $softwareStack;
    protected $_name = [
        'frameWork'     => 'FrameWork',
        'os'            => 'Os',
        'parameters'    => 'Parameters',
        'softwareStack' => 'SoftwareStack',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return staticConfig
     */
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
