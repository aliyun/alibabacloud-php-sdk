<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\SearchCloudGtmAddressPoolsResponseBody\addressPools\addressPool\addresses\address\healthTasks;

use AlibabaCloud\Dara\Model;

class healthTask extends Model
{
    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $templateName;
    protected $_name = [
        'port' => 'Port',
        'templateId' => 'TemplateId',
        'templateName' => 'TemplateName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
