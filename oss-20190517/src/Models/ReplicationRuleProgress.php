<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class ReplicationRuleProgress extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var string
     */
    public $ID;

    /**
     * @var ReplicationPrefixSet
     */
    public $prefixSet;
    protected $_name = [
        'action'    => 'Action',
        'ID'        => 'ID',
        'prefixSet' => 'PrefixSet',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->ID) {
            $res['ID'] = $this->ID;
        }
        if (null !== $this->prefixSet) {
            $res['PrefixSet'] = null !== $this->prefixSet ? $this->prefixSet->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReplicationRuleProgress
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['ID'])) {
            $model->ID = $map['ID'];
        }
        if (isset($map['PrefixSet'])) {
            $model->prefixSet = ReplicationPrefixSet::fromMap($map['PrefixSet']);
        }

        return $model;
    }
}
