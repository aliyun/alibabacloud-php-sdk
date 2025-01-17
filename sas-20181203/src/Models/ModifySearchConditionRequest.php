<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class ModifySearchConditionRequest extends Model
{
    /**
     * @var string
     */
    public $filterConditions;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $sourceIp;
    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'filterConditions' => 'FilterConditions',
        'name'             => 'Name',
        'sourceIp'         => 'SourceIp',
        'type'             => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->filterConditions) {
            $res['FilterConditions'] = $this->filterConditions;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
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
        if (isset($map['FilterConditions'])) {
            $model->filterConditions = $map['FilterConditions'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
