<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20180308\Models;

use AlibabaCloud\Dara\Model;

class CreateMonitoringTemplateRequest extends Model
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
    public $regionId;

    /**
     * @var string
     */
    public $systemEventTemplates;
    protected $_name = [
        'alertTemplatesJson' => 'AlertTemplatesJson',
        'description' => 'Description',
        'hostAvailabilityTemplate' => 'HostAvailabilityTemplate',
        'name' => 'Name',
        'namespace' => 'Namespace',
        'processMonitorTemplates' => 'ProcessMonitorTemplates',
        'regionId' => 'RegionId',
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

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        if (null !== $this->processMonitorTemplates) {
            $res['ProcessMonitorTemplates'] = $this->processMonitorTemplates;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        if (isset($map['ProcessMonitorTemplates'])) {
            $model->processMonitorTemplates = $map['ProcessMonitorTemplates'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SystemEventTemplates'])) {
            $model->systemEventTemplates = $map['SystemEventTemplates'];
        }

        return $model;
    }
}
