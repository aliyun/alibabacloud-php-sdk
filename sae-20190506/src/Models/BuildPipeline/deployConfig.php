<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\BuildPipeline;

use AlibabaCloud\Dara\Model;

class deployConfig extends Model
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

    /**
     * @var string
     */
    public $updateApplicationInput;

    /**
     * @var bool
     */
    public $updateTraffic;
    protected $_name = [
        'alwaysAllocateCPU' => 'AlwaysAllocateCPU',
        'maximumInstanceCount' => 'MaximumInstanceCount',
        'minimumInstanceCount' => 'MinimumInstanceCount',
        'updateApplicationInput' => 'UpdateApplicationInput',
        'updateTraffic' => 'UpdateTraffic',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alwaysAllocateCPU) {
            $res['AlwaysAllocateCPU'] = $this->alwaysAllocateCPU;
        }

        if (null !== $this->maximumInstanceCount) {
            $res['MaximumInstanceCount'] = $this->maximumInstanceCount;
        }

        if (null !== $this->minimumInstanceCount) {
            $res['MinimumInstanceCount'] = $this->minimumInstanceCount;
        }

        if (null !== $this->updateApplicationInput) {
            $res['UpdateApplicationInput'] = $this->updateApplicationInput;
        }

        if (null !== $this->updateTraffic) {
            $res['UpdateTraffic'] = $this->updateTraffic;
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
        if (isset($map['AlwaysAllocateCPU'])) {
            $model->alwaysAllocateCPU = $map['AlwaysAllocateCPU'];
        }

        if (isset($map['MaximumInstanceCount'])) {
            $model->maximumInstanceCount = $map['MaximumInstanceCount'];
        }

        if (isset($map['MinimumInstanceCount'])) {
            $model->minimumInstanceCount = $map['MinimumInstanceCount'];
        }

        if (isset($map['UpdateApplicationInput'])) {
            $model->updateApplicationInput = $map['UpdateApplicationInput'];
        }

        if (isset($map['UpdateTraffic'])) {
            $model->updateTraffic = $map['UpdateTraffic'];
        }

        return $model;
    }
}
