<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models\RoutingRuleRedirect;

use AlibabaCloud\SDK\Oss\V20190517\Models\RoutingRuleRedirect\mirrorHeaders\set;
use AlibabaCloud\Tea\Model;

class mirrorHeaders extends Model
{
    /**
     * @description description
     *
     * @var string[]
     */
    public $pass;

    /**
     * @description description
     *
     * @var bool
     */
    public $passAll;

    /**
     * @description description
     *
     * @var string[]
     */
    public $remove;

    /**
     * @description description
     *
     * @var set[]
     */
    public $set;
    protected $_name = [
        'pass'    => 'Pass',
        'passAll' => 'PassAll',
        'remove'  => 'Remove',
        'set'     => 'Set',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pass) {
            $res['Pass'] = $this->pass;
        }
        if (null !== $this->passAll) {
            $res['PassAll'] = $this->passAll;
        }
        if (null !== $this->remove) {
            $res['Remove'] = $this->remove;
        }
        if (null !== $this->set) {
            $res['Set'] = [];
            if (null !== $this->set && \is_array($this->set)) {
                $n = 0;
                foreach ($this->set as $item) {
                    $res['Set'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mirrorHeaders
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Pass'])) {
            if (!empty($map['Pass'])) {
                $model->pass = $map['Pass'];
            }
        }
        if (isset($map['PassAll'])) {
            $model->passAll = $map['PassAll'];
        }
        if (isset($map['Remove'])) {
            if (!empty($map['Remove'])) {
                $model->remove = $map['Remove'];
            }
        }
        if (isset($map['Set'])) {
            if (!empty($map['Set'])) {
                $model->set = [];
                $n          = 0;
                foreach ($map['Set'] as $item) {
                    $model->set[$n++] = null !== $item ? set::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
