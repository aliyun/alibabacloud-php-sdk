<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\CarSceneQueryResponseBody;

use AlibabaCloud\Dara\Model;

class module extends Model
{
    /**
     * @var string
     */
    public $scenarioTemplateId;

    /**
     * @var string
     */
    public $scenarioTemplateName;

    /**
     * @var string
     */
    public $state;
    protected $_name = [
        'scenarioTemplateId' => 'scenarioTemplateId',
        'scenarioTemplateName' => 'scenarioTemplateName',
        'state' => 'state',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->scenarioTemplateId) {
            $res['scenarioTemplateId'] = $this->scenarioTemplateId;
        }

        if (null !== $this->scenarioTemplateName) {
            $res['scenarioTemplateName'] = $this->scenarioTemplateName;
        }

        if (null !== $this->state) {
            $res['state'] = $this->state;
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
        if (isset($map['scenarioTemplateId'])) {
            $model->scenarioTemplateId = $map['scenarioTemplateId'];
        }

        if (isset($map['scenarioTemplateName'])) {
            $model->scenarioTemplateName = $map['scenarioTemplateName'];
        }

        if (isset($map['state'])) {
            $model->state = $map['state'];
        }

        return $model;
    }
}
