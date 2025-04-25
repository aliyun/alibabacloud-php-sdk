<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mnsopen\V20220119\Models;

use AlibabaCloud\Dara\Model;

class EventMatchRule extends Model
{
    /**
     * @var bool
     */
    public $matchState;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $prefix;

    /**
     * @var string
     */
    public $suffix;
    protected $_name = [
        'matchState' => 'MatchState',
        'name' => 'Name',
        'prefix' => 'Prefix',
        'suffix' => 'Suffix',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->matchState) {
            $res['MatchState'] = $this->matchState;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->prefix) {
            $res['Prefix'] = $this->prefix;
        }

        if (null !== $this->suffix) {
            $res['Suffix'] = $this->suffix;
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
        if (isset($map['MatchState'])) {
            $model->matchState = $map['MatchState'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Prefix'])) {
            $model->prefix = $map['Prefix'];
        }

        if (isset($map['Suffix'])) {
            $model->suffix = $map['Suffix'];
        }

        return $model;
    }
}
