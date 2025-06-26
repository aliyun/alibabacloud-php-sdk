<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models\CreateAudioAsrTaskRequest;

use AlibabaCloud\Dara\Model;

class output extends Model
{
    /**
     * @var string
     */
    public $oss;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'oss' => 'oss',
        'type' => 'type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->oss) {
            $res['oss'] = $this->oss;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['oss'])) {
            $model->oss = $map['oss'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
