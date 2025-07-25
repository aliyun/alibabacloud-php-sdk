<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

class BindingPolicy extends Model
{
    /**
     * @var string[]
     */
    public $excludeNodes;

    /**
     * @var string[]
     */
    public $includeNodes;

    /**
     * @example 5
     *
     * @var int
     */
    public $nodeSpecCount;
    protected $_name = [
        'excludeNodes' => 'ExcludeNodes',
        'includeNodes' => 'IncludeNodes',
        'nodeSpecCount' => 'NodeSpecCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->excludeNodes) {
            $res['ExcludeNodes'] = $this->excludeNodes;
        }
        if (null !== $this->includeNodes) {
            $res['IncludeNodes'] = $this->includeNodes;
        }
        if (null !== $this->nodeSpecCount) {
            $res['NodeSpecCount'] = $this->nodeSpecCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BindingPolicy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExcludeNodes'])) {
            if (!empty($map['ExcludeNodes'])) {
                $model->excludeNodes = $map['ExcludeNodes'];
            }
        }
        if (isset($map['IncludeNodes'])) {
            if (!empty($map['IncludeNodes'])) {
                $model->includeNodes = $map['IncludeNodes'];
            }
        }
        if (isset($map['NodeSpecCount'])) {
            $model->nodeSpecCount = $map['NodeSpecCount'];
        }

        return $model;
    }
}
