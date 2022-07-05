<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\EtlJob;

use AlibabaCloud\Tea\Model;

class logConfig extends Model
{
    /**
     * @description endpoint
     *
     * @var string
     */
    public $endpoint;

    /**
     * @description logstore 名称
     *
     * @var string
     */
    public $logstoreName;

    /**
     * @description project 名称
     *
     * @var string
     */
    public $projectName;
    protected $_name = [
        'endpoint'     => 'endpoint',
        'logstoreName' => 'logstoreName',
        'projectName'  => 'projectName',
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
        if (null !== $this->projectName) {
            $res['projectName'] = $this->projectName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logConfig
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
        if (isset($map['projectName'])) {
            $model->projectName = $map['projectName'];
        }

        return $model;
    }
}
