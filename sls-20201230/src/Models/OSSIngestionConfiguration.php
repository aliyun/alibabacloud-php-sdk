<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class OSSIngestionConfiguration extends Model
{
    /**
     * @var string
     */
    public $logstore;

    /**
     * @var OSSIngestionConfigurationSource
     */
    public $source;
    protected $_name = [
        'logstore' => 'logstore',
        'source' => 'source',
    ];

    public function validate()
    {
        if (null !== $this->source) {
            $this->source->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->logstore) {
            $res['logstore'] = $this->logstore;
        }

        if (null !== $this->source) {
            $res['source'] = null !== $this->source ? $this->source->toArray($noStream) : $this->source;
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
            $model->logstore = $map['logstore'];
        }

        if (isset($map['source'])) {
            $model->source = OSSIngestionConfigurationSource::fromMap($map['source']);
        }

        return $model;
    }
}
