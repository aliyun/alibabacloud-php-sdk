<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class ApplicationStatus extends Model
{
    /**
     * @var int
     */
    public $instanceCount;

    /**
     * @var ScaleConfig
     */
    public $scaleConfig;
    protected $_name = [
        'instanceCount' => 'instanceCount',
        'scaleConfig'   => 'scaleConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceCount) {
            $res['instanceCount'] = $this->instanceCount;
        }
        if (null !== $this->scaleConfig) {
            $res['scaleConfig'] = null !== $this->scaleConfig ? $this->scaleConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ApplicationStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['instanceCount'])) {
            $model->instanceCount = $map['instanceCount'];
        }
        if (isset($map['scaleConfig'])) {
            $model->scaleConfig = ScaleConfig::fromMap($map['scaleConfig']);
        }

        return $model;
    }
}
