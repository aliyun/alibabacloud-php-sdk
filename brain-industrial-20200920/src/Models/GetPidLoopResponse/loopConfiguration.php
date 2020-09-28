<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetPidLoopResponse;

use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetPidLoopResponse\loopConfiguration\baseParam;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetPidLoopResponse\loopConfiguration\identParam;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetPidLoopResponse\loopConfiguration\resetParam;
use AlibabaCloud\Tea\Model;

class loopConfiguration extends Model
{
    /**
     * @var baseParam
     */
    public $baseParam;

    /**
     * @var identParam
     */
    public $identParam;

    /**
     * @var resetParam
     */
    public $resetParam;
    protected $_name = [
        'baseParam'  => 'BaseParam',
        'identParam' => 'IdentParam',
        'resetParam' => 'ResetParam',
    ];

    public function validate()
    {
        Model::validateRequired('baseParam', $this->baseParam, true);
        Model::validateRequired('identParam', $this->identParam, true);
        Model::validateRequired('resetParam', $this->resetParam, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baseParam) {
            $res['BaseParam'] = null !== $this->baseParam ? $this->baseParam->toMap() : null;
        }
        if (null !== $this->identParam) {
            $res['IdentParam'] = null !== $this->identParam ? $this->identParam->toMap() : null;
        }
        if (null !== $this->resetParam) {
            $res['ResetParam'] = null !== $this->resetParam ? $this->resetParam->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return loopConfiguration
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaseParam'])) {
            $model->baseParam = baseParam::fromMap($map['BaseParam']);
        }
        if (isset($map['IdentParam'])) {
            $model->identParam = identParam::fromMap($map['IdentParam']);
        }
        if (isset($map['ResetParam'])) {
            $model->resetParam = resetParam::fromMap($map['ResetParam']);
        }

        return $model;
    }
}
