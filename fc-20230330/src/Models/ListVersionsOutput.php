<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class ListVersionsOutput extends Model
{
    /**
     * @var string
     */
    public $direction;
    /**
     * @var string
     */
    public $nextToken;
    /**
     * @var Version[]
     */
    public $versions;
    protected $_name = [
        'direction' => 'direction',
        'nextToken' => 'nextToken',
        'versions'  => 'versions',
    ];

    public function validate()
    {
        if (\is_array($this->versions)) {
            Model::validateArray($this->versions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->direction) {
            $res['direction'] = $this->direction;
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->versions) {
            if (\is_array($this->versions)) {
                $res['versions'] = [];
                $n1              = 0;
                foreach ($this->versions as $item1) {
                    $res['versions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['direction'])) {
            $model->direction = $map['direction'];
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['versions'])) {
            if (!empty($map['versions'])) {
                $model->versions = [];
                $n1              = 0;
                foreach ($map['versions'] as $item1) {
                    $model->versions[$n1++] = Version::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
