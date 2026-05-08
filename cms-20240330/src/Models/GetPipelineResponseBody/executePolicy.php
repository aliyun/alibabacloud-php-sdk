<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\GetPipelineResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetPipelineResponseBody\executePolicy\runOnce;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetPipelineResponseBody\executePolicy\scheduled;

class executePolicy extends Model
{
    /**
     * @var string
     */
    public $mode;

    /**
     * @var runOnce
     */
    public $runOnce;

    /**
     * @var scheduled
     */
    public $scheduled;
    protected $_name = [
        'mode' => 'mode',
        'runOnce' => 'runOnce',
        'scheduled' => 'scheduled',
    ];

    public function validate()
    {
        if (null !== $this->runOnce) {
            $this->runOnce->validate();
        }
        if (null !== $this->scheduled) {
            $this->scheduled->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mode) {
            $res['mode'] = $this->mode;
        }

        if (null !== $this->runOnce) {
            $res['runOnce'] = null !== $this->runOnce ? $this->runOnce->toArray($noStream) : $this->runOnce;
        }

        if (null !== $this->scheduled) {
            $res['scheduled'] = null !== $this->scheduled ? $this->scheduled->toArray($noStream) : $this->scheduled;
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

        if (isset($map['runOnce'])) {
            $model->runOnce = runOnce::fromMap($map['runOnce']);
        }

        if (isset($map['scheduled'])) {
            $model->scheduled = scheduled::fromMap($map['scheduled']);
        }

        return $model;
    }
}
