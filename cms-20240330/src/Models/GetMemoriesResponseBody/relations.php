<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\GetMemoriesResponseBody;

use AlibabaCloud\Dara\Model;

class relations extends Model
{
    /**
     * @var string
     */
    public $destination;

    /**
     * @var string
     */
    public $relationship;

    /**
     * @var string
     */
    public $source;
    protected $_name = [
        'destination' => 'destination',
        'relationship' => 'relationship',
        'source' => 'source',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->destination) {
            $res['destination'] = $this->destination;
        }

        if (null !== $this->relationship) {
            $res['relationship'] = $this->relationship;
        }

        if (null !== $this->source) {
            $res['source'] = $this->source;
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
        if (isset($map['destination'])) {
            $model->destination = $map['destination'];
        }

        if (isset($map['relationship'])) {
            $model->relationship = $map['relationship'];
        }

        if (isset($map['source'])) {
            $model->source = $map['source'];
        }

        return $model;
    }
}
