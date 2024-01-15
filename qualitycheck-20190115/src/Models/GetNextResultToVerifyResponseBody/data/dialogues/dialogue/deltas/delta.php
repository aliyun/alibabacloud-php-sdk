<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetNextResultToVerifyResponseBody\data\dialogues\dialogue\deltas;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetNextResultToVerifyResponseBody\data\dialogues\dialogue\deltas\delta\source;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetNextResultToVerifyResponseBody\data\dialogues\dialogue\deltas\delta\target;
use AlibabaCloud\Tea\Model;

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
     * @example CHANGE
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'source' => 'Source',
        'target' => 'Target',
        'type'   => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->source) {
            $res['Source'] = null !== $this->source ? $this->source->toMap() : null;
        }
        if (null !== $this->target) {
            $res['Target'] = null !== $this->target ? $this->target->toMap() : null;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return delta
     */
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
