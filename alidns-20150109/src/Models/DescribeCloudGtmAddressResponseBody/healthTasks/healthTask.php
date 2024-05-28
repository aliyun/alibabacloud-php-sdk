<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCloudGtmAddressResponseBody\healthTasks;

use AlibabaCloud\Tea\Model;

class healthTask extends Model
{
    /**
     * @example ok
     *
     * @var string
     */
    public $monitorStatus;

    /**
     * @example 80
     *
     * @var int
     */
    public $port;

    /**
     * @example mtp-89518052425100**80
     *
     * @var string
     */
    public $templateId;

    /**
     * @example Ping-IPv4
     *
     * @var string
     */
    public $templateName;
    protected $_name = [
        'monitorStatus' => 'MonitorStatus',
        'port'          => 'Port',
        'templateId'    => 'TemplateId',
        'templateName'  => 'TemplateName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->monitorStatus) {
            $res['MonitorStatus'] = $this->monitorStatus;
        }
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
        if (isset($map['MonitorStatus'])) {
            $model->monitorStatus = $map['MonitorStatus'];
        }
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
