<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Dara\Model;

class CreateTaskGroupRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $regId;

    /**
     * @var string
     */
    public $sampleIds;

    /**
     * @var string
     */
    public $scenes;

    /**
     * @var string
     */
    public $serviceCodes;

    /**
     * @var string
     */
    public $serviceNames;

    /**
     * @var string
     */
    public $tab;

    /**
     * @var string
     */
    public $taskGroupName;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'lang' => 'Lang',
        'regId' => 'RegId',
        'sampleIds' => 'SampleIds',
        'scenes' => 'Scenes',
        'serviceCodes' => 'ServiceCodes',
        'serviceNames' => 'ServiceNames',
        'tab' => 'Tab',
        'taskGroupName' => 'TaskGroupName',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->regId) {
            $res['RegId'] = $this->regId;
        }

        if (null !== $this->sampleIds) {
            $res['SampleIds'] = $this->sampleIds;
        }

        if (null !== $this->scenes) {
            $res['Scenes'] = $this->scenes;
        }

        if (null !== $this->serviceCodes) {
            $res['ServiceCodes'] = $this->serviceCodes;
        }

        if (null !== $this->serviceNames) {
            $res['ServiceNames'] = $this->serviceNames;
        }

        if (null !== $this->tab) {
            $res['Tab'] = $this->tab;
        }

        if (null !== $this->taskGroupName) {
            $res['TaskGroupName'] = $this->taskGroupName;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['RegId'])) {
            $model->regId = $map['RegId'];
        }

        if (isset($map['SampleIds'])) {
            $model->sampleIds = $map['SampleIds'];
        }

        if (isset($map['Scenes'])) {
            $model->scenes = $map['Scenes'];
        }

        if (isset($map['ServiceCodes'])) {
            $model->serviceCodes = $map['ServiceCodes'];
        }

        if (isset($map['ServiceNames'])) {
            $model->serviceNames = $map['ServiceNames'];
        }

        if (isset($map['Tab'])) {
            $model->tab = $map['Tab'];
        }

        if (isset($map['TaskGroupName'])) {
            $model->taskGroupName = $map['TaskGroupName'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
