<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models\VideoGenerationRequest;

use AlibabaCloud\Dara\Model;

class intent extends Model
{
    /**
     * @var string
     */
    public $channel;

    /**
     * @var string
     */
    public $goal;

    /**
     * @var string
     */
    public $script;
    protected $_name = [
        'channel' => 'Channel',
        'goal' => 'Goal',
        'script' => 'Script',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->channel) {
            $res['Channel'] = $this->channel;
        }

        if (null !== $this->goal) {
            $res['Goal'] = $this->goal;
        }

        if (null !== $this->script) {
            $res['Script'] = $this->script;
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
        if (isset($map['Channel'])) {
            $model->channel = $map['Channel'];
        }

        if (isset($map['Goal'])) {
            $model->goal = $map['Goal'];
        }

        if (isset($map['Script'])) {
            $model->script = $map['Script'];
        }

        return $model;
    }
}
