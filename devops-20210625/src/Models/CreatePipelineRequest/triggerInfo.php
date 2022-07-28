<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\CreatePipelineRequest;

use AlibabaCloud\SDK\Devops\V20210625\Models\CreatePipelineRequest\triggerInfo\scheduled;
use AlibabaCloud\Tea\Model;

class triggerInfo extends Model
{
    /**
     * @var scheduled
     */
    public $scheduled;

    /**
     * @var bool
     */
    public $webhookEnable;
    protected $_name = [
        'scheduled'     => 'scheduled',
        'webhookEnable' => 'webhookEnable',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->scheduled) {
            $res['scheduled'] = null !== $this->scheduled ? $this->scheduled->toMap() : null;
        }
        if (null !== $this->webhookEnable) {
            $res['webhookEnable'] = $this->webhookEnable;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return triggerInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['scheduled'])) {
            $model->scheduled = scheduled::fromMap($map['scheduled']);
        }
        if (isset($map['webhookEnable'])) {
            $model->webhookEnable = $map['webhookEnable'];
        }

        return $model;
    }
}
