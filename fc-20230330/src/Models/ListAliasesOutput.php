<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

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
        'aliases' => 'aliases',
        'nextToken' => 'nextToken',
    ];

    public function validate()
    {
        if (\is_array($this->aliases)) {
            Model::validateArray($this->aliases);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliases) {
            if (\is_array($this->aliases)) {
                $res['aliases'] = [];
                $n1 = 0;
                foreach ($this->aliases as $item1) {
                    $res['aliases'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
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
        if (isset($map['aliases'])) {
            if (!empty($map['aliases'])) {
                $model->aliases = [];
                $n1 = 0;
                foreach ($map['aliases'] as $item1) {
                    $model->aliases[$n1] = Alias::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        return $model;
    }
}
