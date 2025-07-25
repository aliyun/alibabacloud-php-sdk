<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\CreateCloudGtmAddressRequest;

use AlibabaCloud\Tea\Model;

class healthTasks extends Model
{
    /**
     * @description The service port of the address on which health check tasks are performed. If the ping protocol is used for health checks, the configuration of the service port is not supported.
     *
     * @example 80
     *
     * @var int
     */
    public $port;

    /**
     * @description The ID of the health check template associated with the address.
     *
     * @example mtp-89518052425100**80
     *
     * @var string
     */
    public $templateId;
    protected $_name = [
        'port' => 'Port',
        'templateId' => 'TemplateId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return healthTasks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
