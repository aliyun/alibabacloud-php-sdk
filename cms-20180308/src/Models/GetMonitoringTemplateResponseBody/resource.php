<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20180308\Models\GetMonitoringTemplateResponseBody;

use AlibabaCloud\Dara\Model;

class resource extends Model
{
    /**
     * @var string
     */
    public $alertTemplatesJson;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $hostAvailabilityTemplate;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $processMonitorTemplates;

    /**
     * @var string
     */
    public $restVersion;

    /**
     * @var string
     */
    public $systemEventTemplates;
    protected $_name = [
        'alertTemplatesJson' => 'AlertTemplatesJson',
        'description' => 'Description',
        'hostAvailabilityTemplate' => 'HostAvailabilityTemplate',
        'id' => 'Id',
        'name' => 'Name',
        'namespace' => 'Namespace',
        'processMonitorTemplates' => 'ProcessMonitorTemplates',
        'restVersion' => 'RestVersion',
        'systemEventTemplates' => 'SystemEventTemplates',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertTemplatesJson) {
            $res['AlertTemplatesJson'] = $this->alertTemplatesJson;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->hostAvailabilityTemplate) {
            $res['HostAvailabilityTemplate'] = $this->hostAvailabilityTemplate;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        if (null !== $this->processMonitorTemplates) {
            $res['ProcessMonitorTemplates'] = $this->processMonitorTemplates;
        }

        if (null !== $this->restVersion) {
            $res['RestVersion'] = $this->restVersion;
        }

        if (null !== $this->systemEventTemplates) {
            $res['SystemEventTemplates'] = $this->systemEventTemplates;
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
        if (isset($map['AlertTemplatesJson'])) {
            $model->alertTemplatesJson = $map['AlertTemplatesJson'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['HostAvailabilityTemplate'])) {
            $model->hostAvailabilityTemplate = $map['HostAvailabilityTemplate'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        if (isset($map['ProcessMonitorTemplates'])) {
            $model->processMonitorTemplates = $map['ProcessMonitorTemplates'];
        }

        if (isset($map['RestVersion'])) {
            $model->restVersion = $map['RestVersion'];
        }

        if (isset($map['SystemEventTemplates'])) {
            $model->systemEventTemplates = $map['SystemEventTemplates'];
        }

        return $model;
    }
}
