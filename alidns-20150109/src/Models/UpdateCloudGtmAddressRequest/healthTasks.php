<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateCloudGtmAddressRequest;

use AlibabaCloud\Tea\Model;

class healthTasks extends Model
{
    /**
     * @description The target service port for health checks. When the Ping protocol is selected for health checks, configuration of the service port is not supported.
     * - If the input parameter is not empty: Update the port number based on the input parameter;
     * @example 80
     *
     * @var int
     */
    public $port;

    /**
     * @description ID of the health check template associated with the address. This parameter is required if a health check port is configured.
     * - If the input parameter is not empty: Update the detection template based on the input parameter;
     * @example mtp-89518052425100**80
     *
     * @var string
     */
    public $templateId;
    protected $_name = [
        'port'       => 'Port',
        'templateId' => 'TemplateId',
    ];

    public function validate()
    {
    }

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
