<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateCloudGtmAddressRequest;

use AlibabaCloud\Tea\Model;

class healthTasks extends Model
{
    /**
     * @description The service port of the address on which health check tasks are performed. If the ping protocol is used for health checks, the configuration of the service port is not supported.
     *
     *   If you leave this parameter empty, the existing service port is deleted.
     *   If you specify this parameter, the existing service port is updated based on the value of this parameter.
     *
     * @example 80
     *
     * @var int
     */
    public $port;

    /**
     * @description The ID of the health check template that is associated with the address. This parameter is required if you specify a service port of the address for health check tasks.
     *
     *   If you leave this parameter empty, the associated health check template is disassociated from the address.
     *   If you specify this parameter, the associated health check template is updated based on the value of this parameter.
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
