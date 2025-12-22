<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\MultiModalGuardForBase64ResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Green\V20220302\Models\MultiModalGuardForBase64ResponseBody\data\detail\result;

class detail extends Model
{
    /**
     * @var string
     */
    public $level;

    /**
     * @var result[]
     */
    public $result;

    /**
     * @var string
     */
    public $suggestion;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'level' => 'Level',
        'result' => 'Result',
        'suggestion' => 'Suggestion',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->result)) {
            Model::validateArray($this->result);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }

        if (null !== $this->result) {
            if (\is_array($this->result)) {
                $res['Result'] = [];
                $n1 = 0;
                foreach ($this->result as $item1) {
                    $res['Result'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->suggestion) {
            $res['Suggestion'] = $this->suggestion;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        if (isset($map['Result'])) {
            if (!empty($map['Result'])) {
                $model->result = [];
                $n1 = 0;
                foreach ($map['Result'] as $item1) {
                    $model->result[$n1] = result::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Suggestion'])) {
            $model->suggestion = $map['Suggestion'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
