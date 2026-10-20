<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models\CreateContextStoreRequest\config\source;

use AlibabaCloud\Dara\Model;

class versionPolicy extends Model
{
    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $startSeq;
    protected $_name = [
        'mode' => 'mode',
        'startSeq' => 'startSeq',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mode) {
            $res['mode'] = $this->mode;
        }

        if (null !== $this->startSeq) {
            $res['startSeq'] = $this->startSeq;
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

        if (isset($map['startSeq'])) {
            $model->startSeq = $map['startSeq'];
        }

        return $model;
    }
}
