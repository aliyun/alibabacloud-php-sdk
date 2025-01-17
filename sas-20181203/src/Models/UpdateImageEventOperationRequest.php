<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class UpdateImageEventOperationRequest extends Model
{
    /**
     * @var string
     */
    public $conditions;
    /**
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    public $note;
    /**
     * @var string
     */
    public $scenarios;
    /**
     * @var string
     */
    public $source;
    protected $_name = [
        'conditions' => 'Conditions',
        'id'         => 'Id',
        'note'       => 'Note',
        'scenarios'  => 'Scenarios',
        'source'     => 'Source',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->conditions) {
            $res['Conditions'] = $this->conditions;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->note) {
            $res['Note'] = $this->note;
        }

        if (null !== $this->scenarios) {
            $res['Scenarios'] = $this->scenarios;
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
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
        if (isset($map['Conditions'])) {
            $model->conditions = $map['Conditions'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Note'])) {
            $model->note = $map['Note'];
        }

        if (isset($map['Scenarios'])) {
            $model->scenarios = $map['Scenarios'];
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        return $model;
    }
}
