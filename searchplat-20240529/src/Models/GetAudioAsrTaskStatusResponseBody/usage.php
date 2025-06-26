<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models\GetAudioAsrTaskStatusResponseBody;

use AlibabaCloud\Dara\Model;

class usage extends Model
{
    /**
     * @var float
     */
    public $duration;
    protected $_name = [
        'duration' => 'duration',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->duration) {
            $res['duration'] = $this->duration;
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
        if (isset($map['duration'])) {
            $model->duration = $map['duration'];
        }

        return $model;
    }
}
