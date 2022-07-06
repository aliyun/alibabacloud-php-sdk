<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\LogtailConfig;

use AlibabaCloud\Tea\Model;

class outputDetail extends Model
{
    /**
     * @description endpoint
     *
     * @var string
     */
    public $endpoint;

    /**
     * @description logstore
     *
     * @var string
     */
    public $logstore;
    protected $_name = [
        'endpoint' => 'endpoint',
        'logstore' => 'logstore',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endpoint) {
            $res['endpoint'] = $this->endpoint;
        }
        if (null !== $this->logstore) {
            $res['logstore'] = $this->logstore;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return outputDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['endpoint'])) {
            $model->endpoint = $map['endpoint'];
        }
        if (isset($map['logstore'])) {
            $model->logstore = $map['logstore'];
        }

        return $model;
    }
}
