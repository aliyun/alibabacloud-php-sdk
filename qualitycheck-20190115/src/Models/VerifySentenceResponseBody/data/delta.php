<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\VerifySentenceResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\VerifySentenceResponseBody\data\delta\source;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\VerifySentenceResponseBody\data\delta\target;

class delta extends Model
{
    /**
     * @var source
     */
    public $source;

    /**
     * @var target
     */
    public $target;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'source' => 'Source',
        'target' => 'Target',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (null !== $this->source) {
            $this->source->validate();
        }
        if (null !== $this->target) {
            $this->target->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->source) {
            $res['Source'] = null !== $this->source ? $this->source->toArray($noStream) : $this->source;
        }

        if (null !== $this->target) {
            $res['Target'] = null !== $this->target ? $this->target->toArray($noStream) : $this->target;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Source'])) {
            $model->source = source::fromMap($map['Source']);
        }

        if (isset($map['Target'])) {
            $model->target = target::fromMap($map['Target']);
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
