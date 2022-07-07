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
     * @description logstoreName
     *
     * @var string
     */
    public $logstoreName;

    /**
     * @description 地域
     *
     * @var string
     */
    public $region;
    protected $_name = [
        'endpoint'     => 'endpoint',
        'logstoreName' => 'logstoreName',
        'region'       => 'region',
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
        if (null !== $this->logstoreName) {
            $res['logstoreName'] = $this->logstoreName;
        }
        if (null !== $this->region) {
            $res['region'] = $this->region;
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
        if (isset($map['logstoreName'])) {
            $model->logstoreName = $map['logstoreName'];
        }
        if (isset($map['region'])) {
            $model->region = $map['region'];
        }

        return $model;
    }
}
