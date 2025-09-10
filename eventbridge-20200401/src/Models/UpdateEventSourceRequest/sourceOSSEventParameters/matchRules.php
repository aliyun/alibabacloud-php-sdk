<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventSourceRequest\sourceOSSEventParameters;

use AlibabaCloud\Dara\Model;

class matchRules extends Model
{
    /**
     * @var string
     */
    public $suffix;

    /**
     * @var bool
     */
    public $matchState;

    /**
     * @var string
     */
    public $prefix;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'suffix' => 'Suffix',
        'matchState' => 'MatchState',
        'prefix' => 'Prefix',
        'name' => 'Name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->suffix) {
            $res['Suffix'] = $this->suffix;
        }

        if (null !== $this->matchState) {
            $res['MatchState'] = $this->matchState;
        }

        if (null !== $this->prefix) {
            $res['Prefix'] = $this->prefix;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['Suffix'])) {
            $model->suffix = $map['Suffix'];
        }

        if (isset($map['MatchState'])) {
            $model->matchState = $map['MatchState'];
        }

        if (isset($map['Prefix'])) {
            $model->prefix = $map['Prefix'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
