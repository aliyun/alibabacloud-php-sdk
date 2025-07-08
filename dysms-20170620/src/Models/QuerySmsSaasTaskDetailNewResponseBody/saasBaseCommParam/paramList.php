<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsSaasTaskDetailNewResponseBody\saasBaseCommParam;

use AlibabaCloud\Dara\Model;

class paramList extends Model
{
    /**
     * @var string[]
     */
    public $param;
    protected $_name = [
        'param' => 'Param',
    ];

    public function validate()
    {
        if (\is_array($this->param)) {
            Model::validateArray($this->param);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->param) {
            if (\is_array($this->param)) {
                $res['Param'] = [];
                $n1 = 0;
                foreach ($this->param as $item1) {
                    $res['Param'][$n1] = $item1;
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
        if (isset($map['Param'])) {
            if (!empty($map['Param'])) {
                $model->param = [];
                $n1 = 0;
                foreach ($map['Param'] as $item1) {
                    $model->param[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
