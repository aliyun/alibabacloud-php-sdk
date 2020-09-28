<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetPidLoopResponse\loopConfiguration;

use AlibabaCloud\Tea\Model;

class identParam extends Model
{
    /**
     * @var int
     */
    public $modelType;

    /**
     * @var int
     */
    public $delay;
    protected $_name = [
        'modelType' => 'ModelType',
        'delay'     => 'Delay',
    ];

    public function validate()
    {
        Model::validateRequired('modelType', $this->modelType, true);
        Model::validateRequired('delay', $this->delay, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->modelType) {
            $res['ModelType'] = $this->modelType;
        }
        if (null !== $this->delay) {
            $res['Delay'] = $this->delay;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return identParam
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ModelType'])) {
            $model->modelType = $map['ModelType'];
        }
        if (isset($map['Delay'])) {
            $model->delay = $map['Delay'];
        }

        return $model;
    }
}
