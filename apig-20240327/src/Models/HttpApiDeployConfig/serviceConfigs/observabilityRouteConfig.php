<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiDeployConfig\serviceConfigs;

use AlibabaCloud\Dara\Model;

class observabilityRouteConfig extends Model
{
    /**
     * @var string
     */
    public $mode;

    /**
     * @var int
     */
    public $queueSize;

    /**
     * @var float
     */
    public $rateLimit;
    protected $_name = [
        'mode' => 'mode',
        'queueSize' => 'queueSize',
        'rateLimit' => 'rateLimit',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mode) {
            $res['mode'] = $this->mode;
        }

        if (null !== $this->queueSize) {
            $res['queueSize'] = $this->queueSize;
        }

        if (null !== $this->rateLimit) {
            $res['rateLimit'] = $this->rateLimit;
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
        if (isset($map['mode'])) {
            $model->mode = $map['mode'];
        }

        if (isset($map['queueSize'])) {
            $model->queueSize = $map['queueSize'];
        }

        if (isset($map['rateLimit'])) {
            $model->rateLimit = $map['rateLimit'];
        }

        return $model;
    }
}
