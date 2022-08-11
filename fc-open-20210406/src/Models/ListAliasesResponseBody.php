<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\SDK\FCOpen\V20210406\Models\ListAliasesResponseBody\aliases;
use AlibabaCloud\Tea\Model;

class ListAliasesResponseBody extends Model
{
    /**
     * @var aliases[]
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
     * @return ListAliasesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['aliases'])) {
            if (!empty($map['aliases'])) {
                $model->aliases = [];
                $n              = 0;
                foreach ($map['aliases'] as $item) {
                    $model->aliases[$n++] = null !== $item ? aliases::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        return $model;
    }
}
