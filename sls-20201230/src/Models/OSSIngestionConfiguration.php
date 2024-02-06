<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

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
        'source'   => 'source',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logstore) {
            $res['logstore'] = $this->logstore;
        }
        if (null !== $this->source) {
            $res['source'] = null !== $this->source ? $this->source->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OSSIngestionConfiguration
     */
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
