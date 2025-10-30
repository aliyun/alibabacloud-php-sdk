<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetPipelineByIdResponseBody\data\pipelineConfig;

use AlibabaCloud\Dara\Model;

class hops extends Model
{
    /**
     * @var bool
     */
    public $sendTo;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $target;
    protected $_name = [
        'sendTo' => 'SendTo',
        'source' => 'Source',
        'target' => 'Target',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sendTo) {
            $res['SendTo'] = $this->sendTo;
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        if (null !== $this->target) {
            $res['Target'] = $this->target;
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
        if (isset($map['SendTo'])) {
            $model->sendTo = $map['SendTo'];
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }

        return $model;
    }
}
