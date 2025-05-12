<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryPipelineListResponseBody\pipelineList\pipeline;

use AlibabaCloud\Dara\Model;

class extendConfig extends Model
{
    /**
     * @var bool
     */
    public $isBoostNew;

    /**
     * @var int
     */
    public $maxMultiSpeed;

    /**
     * @var string
     */
    public $multiSpeedDowngradePolicy;
    protected $_name = [
        'isBoostNew' => 'IsBoostNew',
        'maxMultiSpeed' => 'MaxMultiSpeed',
        'multiSpeedDowngradePolicy' => 'MultiSpeedDowngradePolicy',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isBoostNew) {
            $res['IsBoostNew'] = $this->isBoostNew;
        }

        if (null !== $this->maxMultiSpeed) {
            $res['MaxMultiSpeed'] = $this->maxMultiSpeed;
        }

        if (null !== $this->multiSpeedDowngradePolicy) {
            $res['MultiSpeedDowngradePolicy'] = $this->multiSpeedDowngradePolicy;
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
        if (isset($map['IsBoostNew'])) {
            $model->isBoostNew = $map['IsBoostNew'];
        }

        if (isset($map['MaxMultiSpeed'])) {
            $model->maxMultiSpeed = $map['MaxMultiSpeed'];
        }

        if (isset($map['MultiSpeedDowngradePolicy'])) {
            $model->multiSpeedDowngradePolicy = $map['MultiSpeedDowngradePolicy'];
        }

        return $model;
    }
}
