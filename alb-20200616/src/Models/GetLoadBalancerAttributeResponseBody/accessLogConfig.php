<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\GetLoadBalancerAttributeResponseBody;

use AlibabaCloud\Tea\Model;

class accessLogConfig extends Model
{
    /**
     * @description The Log Service project.
     *
     * @example sls-setter
     *
     * @var string
     */
    public $logProject;

    /**
     * @description The Logstore.
     *
     * @example test
     *
     * @var string
     */
    public $logStore;
    protected $_name = [
        'logProject' => 'LogProject',
        'logStore'   => 'LogStore',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logProject) {
            $res['LogProject'] = $this->logProject;
        }
        if (null !== $this->logStore) {
            $res['LogStore'] = $this->logStore;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accessLogConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogProject'])) {
            $model->logProject = $map['LogProject'];
        }
        if (isset($map['LogStore'])) {
            $model->logStore = $map['LogStore'];
        }

        return $model;
    }
}
