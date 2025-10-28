<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sApplicationResponseBody\applcation\app;

use AlibabaCloud\Dara\Model;

class cmdArgs extends Model
{
    /**
     * @var string[]
     */
    public $cmdArg;
    protected $_name = [
        'cmdArg' => 'CmdArg',
    ];

    public function validate()
    {
        if (\is_array($this->cmdArg)) {
            Model::validateArray($this->cmdArg);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cmdArg) {
            if (\is_array($this->cmdArg)) {
                $res['CmdArg'] = [];
                $n1 = 0;
                foreach ($this->cmdArg as $item1) {
                    $res['CmdArg'][$n1] = $item1;
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
        if (isset($map['CmdArg'])) {
            if (!empty($map['CmdArg'])) {
                $model->cmdArg = [];
                $n1 = 0;
                foreach ($map['CmdArg'] as $item1) {
                    $model->cmdArg[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
