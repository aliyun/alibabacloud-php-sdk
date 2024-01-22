<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class UpdateApplicationScaleConfigInput extends Model
{
    /**
     * @var bool
     */
    public $alwaysAllocateCPU;

    /**
     * @var int
     */
    public $maximumInstanceCount;

    /**
     * @var int
     */
    public $minimumInstanceCount;
    protected $_name = [
        'alwaysAllocateCPU'    => 'alwaysAllocateCPU',
        'maximumInstanceCount' => 'maximumInstanceCount',
        'minimumInstanceCount' => 'minimumInstanceCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alwaysAllocateCPU) {
            $res['alwaysAllocateCPU'] = $this->alwaysAllocateCPU;
        }
        if (null !== $this->maximumInstanceCount) {
            $res['maximumInstanceCount'] = $this->maximumInstanceCount;
        }
        if (null !== $this->minimumInstanceCount) {
            $res['minimumInstanceCount'] = $this->minimumInstanceCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateApplicationScaleConfigInput
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['alwaysAllocateCPU'])) {
            $model->alwaysAllocateCPU = $map['alwaysAllocateCPU'];
        }
        if (isset($map['maximumInstanceCount'])) {
            $model->maximumInstanceCount = $map['maximumInstanceCount'];
        }
        if (isset($map['minimumInstanceCount'])) {
            $model->minimumInstanceCount = $map['minimumInstanceCount'];
        }

        return $model;
    }
}
