<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models\ExecuteQueryResponseBody\meta;

use AlibabaCloud\Dara\Model;

class truncation extends Model
{
    /**
     * @var bool
     */
    public $truncated;

    /**
     * @var int[][]
     */
    public $truncatedColumnIndexes;
    protected $_name = [
        'truncated' => 'truncated',
        'truncatedColumnIndexes' => 'truncatedColumnIndexes',
    ];

    public function validate()
    {
        if (\is_array($this->truncatedColumnIndexes)) {
            Model::validateArray($this->truncatedColumnIndexes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->truncated) {
            $res['truncated'] = $this->truncated;
        }

        if (null !== $this->truncatedColumnIndexes) {
            if (\is_array($this->truncatedColumnIndexes)) {
                $res['truncatedColumnIndexes'] = [];
                $n1 = 0;
                foreach ($this->truncatedColumnIndexes as $item1) {
                    if (\is_array($item1)) {
                        $res['truncatedColumnIndexes'][$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $res['truncatedColumnIndexes'][$n1][$n2] = $item2;
                            ++$n2;
                        }
                    }
                    ++$n1;
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
        if (isset($map['truncated'])) {
            $model->truncated = $map['truncated'];
        }

        if (isset($map['truncatedColumnIndexes'])) {
            if (!empty($map['truncatedColumnIndexes'])) {
                $model->truncatedColumnIndexes = [];
                $n1 = 0;
                foreach ($map['truncatedColumnIndexes'] as $item1) {
                    if (!empty($item1)) {
                        $model->truncatedColumnIndexes[$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $model->truncatedColumnIndexes[$n1][$n2] = $item2;
                            ++$n2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
