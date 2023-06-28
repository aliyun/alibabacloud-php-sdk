<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Tea\Model;

class ListAliasesOutput extends Model
{
    /**
     * @var Alias[]
     */
    public $aliases;

    /**
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'aliases'   => 'aliases',
        'nextToken' => 'nextToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliases) {
            $res['aliases'] = [];
            if (null !== $this->aliases && \is_array($this->aliases)) {
                $n = 0;
                foreach ($this->aliases as $item) {
                    $res['aliases'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAliasesOutput
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['aliases'])) {
            if (!empty($map['aliases'])) {
                $model->aliases = [];
                $n              = 0;
                foreach ($map['aliases'] as $item) {
                    $model->aliases[$n++] = null !== $item ? Alias::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        return $model;
    }
}
