<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCloudGtmAddressPoolResponseBody\addresses\address\healthTasks;

use AlibabaCloud\Tea\Model;

class healthTask extends Model
{
    /**
     * @description The target service port for health check probes. When the health check protocol is set to Ping, configuration of the service port is not supported.
     *
     * @example 80
     *
     * @var int
     */
    public $port;

    /**
     * @description ID of the health check template associated with the address.
     *
     * @example mtp-89518052425100**80
     *
     * @var string
     */
    public $templateId;

    /**
     * @description Health check template name.
     *
     * @example IPv4-Ping
     *
     * @var string
     */
    public $templateName;
    protected $_name = [
        'port'         => 'Port',
        'templateId'   => 'TemplateId',
        'templateName' => 'TemplateName',
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
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return healthTask
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
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        return $model;
    }
}
