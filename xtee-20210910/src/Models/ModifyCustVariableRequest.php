<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Dara\Model;

class ModifyCustVariableRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $condition;

    /**
     * @var int
     */
    public $dataVersion;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $eventCodes;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $outputs;

    /**
     * @var string
     */
    public $regId;
    protected $_name = [
        'lang' => 'Lang',
        'condition' => 'condition',
        'dataVersion' => 'dataVersion',
        'description' => 'description',
        'eventCodes' => 'eventCodes',
        'id' => 'id',
        'name' => 'name',
        'outputs' => 'outputs',
        'regId' => 'regId',
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

        if (null !== $this->condition) {
            $res['condition'] = $this->condition;
        }

        if (null !== $this->dataVersion) {
            $res['dataVersion'] = $this->dataVersion;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->eventCodes) {
            $res['eventCodes'] = $this->eventCodes;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->outputs) {
            $res['outputs'] = $this->outputs;
        }

        if (null !== $this->regId) {
            $res['regId'] = $this->regId;
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

        if (isset($map['condition'])) {
            $model->condition = $map['condition'];
        }

        if (isset($map['dataVersion'])) {
            $model->dataVersion = $map['dataVersion'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['eventCodes'])) {
            $model->eventCodes = $map['eventCodes'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['outputs'])) {
            $model->outputs = $map['outputs'];
        }

        if (isset($map['regId'])) {
            $model->regId = $map['regId'];
        }

        return $model;
    }
}
