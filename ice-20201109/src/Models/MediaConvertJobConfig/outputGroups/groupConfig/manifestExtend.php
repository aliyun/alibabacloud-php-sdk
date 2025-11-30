<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\MediaConvertJobConfig\outputGroups\groupConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\MediaConvertJobConfig\outputGroups\groupConfig\manifestExtend\excludes;

class manifestExtend extends Model
{
    /**
     * @var excludes[]
     */
    public $excludes;

    /**
     * @var string
     */
    public $inputRef;
    protected $_name = [
        'excludes' => 'Excludes',
        'inputRef' => 'InputRef',
    ];

    public function validate()
    {
        if (\is_array($this->excludes)) {
            Model::validateArray($this->excludes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->excludes) {
            if (\is_array($this->excludes)) {
                $res['Excludes'] = [];
                $n1 = 0;
                foreach ($this->excludes as $item1) {
                    $res['Excludes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->inputRef) {
            $res['InputRef'] = $this->inputRef;
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
        if (isset($map['Excludes'])) {
            if (!empty($map['Excludes'])) {
                $model->excludes = [];
                $n1 = 0;
                foreach ($map['Excludes'] as $item1) {
                    $model->excludes[$n1] = excludes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['InputRef'])) {
            $model->inputRef = $map['InputRef'];
        }

        return $model;
    }
}
