<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventSourceRequest\sourceOSSEventParameters;

use AlibabaCloud\Dara\Model;

class matchRules extends Model
{
    /**
     * @var string
     */
    public $prefix;

    /**
     * @var string
     */
    public $suffix;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $matchState;
    protected $_name = [
        'prefix' => 'Prefix',
        'suffix' => 'Suffix',
        'name' => 'Name',
        'matchState' => 'MatchState',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->prefix) {
            $res['Prefix'] = $this->prefix;
        }

        if (null !== $this->suffix) {
            $res['Suffix'] = $this->suffix;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->matchState) {
            $res['MatchState'] = $this->matchState;
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
        if (isset($map['Prefix'])) {
            $model->prefix = $map['Prefix'];
        }

        if (isset($map['Suffix'])) {
            $model->suffix = $map['Suffix'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['MatchState'])) {
            $model->matchState = $map['MatchState'];
        }

        return $model;
    }
}
