<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

class MetricDefinition extends Model
{
    /**
     * @example train dataset oob score
     *
     * @var string
     */
    public $description;

    /**
     * @example train:oob_score
     *
     * @var string
     */
    public $name;

    /**
     * @example .*train:oob_score=([-+]?[0-9]*\\.?[0-9]+(?:[eE][-+]?[0-9]+)?).*
     *
     * @var string
     */
    public $regex;
    protected $_name = [
        'description' => 'Description',
        'name'        => 'Name',
        'regex'       => 'Regex',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->regex) {
            $res['Regex'] = $this->regex;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MetricDefinition
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Regex'])) {
            $model->regex = $map['Regex'];
        }

        return $model;
    }
}
