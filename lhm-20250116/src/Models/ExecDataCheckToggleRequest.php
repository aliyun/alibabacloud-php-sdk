<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LHM\V20250116\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\LHM\V20250116\Models\ExecDataCheckToggleRequest\params;

class ExecDataCheckToggleRequest extends Model
{
    /**
     * @var params[]
     */
    public $params;
    protected $_name = [
        'params' => 'params',
    ];

    public function validate()
    {
        if (\is_array($this->params)) {
            Model::validateArray($this->params);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->params) {
            if (\is_array($this->params)) {
                $res['params'] = [];
                $n1 = 0;
                foreach ($this->params as $item1) {
                    $res['params'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['params'])) {
            if (!empty($map['params'])) {
                $model->params = [];
                $n1 = 0;
                foreach ($map['params'] as $item1) {
                    $model->params[$n1] = params::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
