<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\PutEventsRequest;

use AlibabaCloud\Dara\Model;

class eventList extends Model
{
    /**
     * @var mixed
     */
    public $data;

    /**
     * @var string
     */
    public $dataContentType;

    /**
     * @var string
     */
    public $dataSchema;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $specVersion;

    /**
     * @var string
     */
    public $subject;

    /**
     * @var string
     */
    public $time;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'data' => 'Data',
        'dataContentType' => 'DataContentType',
        'dataSchema' => 'DataSchema',
        'id' => 'Id',
        'source' => 'Source',
        'specVersion' => 'SpecVersion',
        'subject' => 'Subject',
        'time' => 'Time',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }

        if (null !== $this->dataContentType) {
            $res['DataContentType'] = $this->dataContentType;
        }

        if (null !== $this->dataSchema) {
            $res['DataSchema'] = $this->dataSchema;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        if (null !== $this->specVersion) {
            $res['SpecVersion'] = $this->specVersion;
        }

        if (null !== $this->subject) {
            $res['Subject'] = $this->subject;
        }

        if (null !== $this->time) {
            $res['Time'] = $this->time;
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
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }

        if (isset($map['DataContentType'])) {
            $model->dataContentType = $map['DataContentType'];
        }

        if (isset($map['DataSchema'])) {
            $model->dataSchema = $map['DataSchema'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        if (isset($map['SpecVersion'])) {
            $model->specVersion = $map['SpecVersion'];
        }

        if (isset($map['Subject'])) {
            $model->subject = $map['Subject'];
        }

        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
