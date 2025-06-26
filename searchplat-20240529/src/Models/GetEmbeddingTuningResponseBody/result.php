<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models\GetEmbeddingTuningResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var float[][]
     */
    public $output;
    protected $_name = [
        'output' => 'output',
    ];

    public function validate()
    {
        if (\is_array($this->output)) {
            Model::validateArray($this->output);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->output) {
            if (\is_array($this->output)) {
                $res['output'] = [];
                $n1 = 0;
                foreach ($this->output as $item1) {
                    if (\is_array($item1)) {
                        $res['output'][$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $res['output'][$n1][$n2] = $item2;
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
        if (isset($map['output'])) {
            if (!empty($map['output'])) {
                $model->output = [];
                $n1 = 0;
                foreach ($map['output'] as $item1) {
                    if (!empty($item1)) {
                        $model->output[$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $model->output[$n1][$n2] = $item2;
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
