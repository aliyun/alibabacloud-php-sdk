<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\runOptions\scaledObject;

use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\runOptions\scaledObject\triggers\metadata;
use AlibabaCloud\Tea\Model;

class triggers extends Model
{
    /**
     * @var metadata
     */
    public $metadata;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'metadata' => 'Metadata',
        'type'     => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->metadata) {
            $res['Metadata'] = null !== $this->metadata ? $this->metadata->toMap() : null;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return triggers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Metadata'])) {
            $model->metadata = metadata::fromMap($map['Metadata']);
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
