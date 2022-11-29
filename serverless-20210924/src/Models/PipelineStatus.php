<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Serverless\V20210924\Models;

use AlibabaCloud\Tea\Model;

class PipelineStatus extends Model
{
    /**
     * @var string
     */
    public $phase;
    protected $_name = [
        'phase' => 'phase',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->phase) {
            $res['phase'] = $this->phase;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PipelineStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['phase'])) {
            $model->phase = $map['phase'];
        }

        return $model;
    }
}
