<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class PublishRuntimeVersionInput extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $publisher;
    protected $_name = [
        'description' => 'description',
        'publisher' => 'publisher',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->publisher) {
            $res['publisher'] = $this->publisher;
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
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['publisher'])) {
            $model->publisher = $map['publisher'];
        }

        return $model;
    }
}
