<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\GetPipelineResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetPipelineResponseBody\source\logstore;

class source extends Model
{
    /**
     * @var logstore
     */
    public $logstore;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'logstore' => 'logstore',
        'type' => 'type',
    ];

    public function validate()
    {
        if (null !== $this->logstore) {
            $this->logstore->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->logstore) {
            $res['logstore'] = null !== $this->logstore ? $this->logstore->toArray($noStream) : $this->logstore;
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
        if (isset($map['logstore'])) {
            $model->logstore = logstore::fromMap($map['logstore']);
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
