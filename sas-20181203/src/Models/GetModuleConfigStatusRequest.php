<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class GetModuleConfigStatusRequest extends Model
{
    /**
     * @var string[]
     */
    public $moduleNames;
    protected $_name = [
        'moduleNames' => 'ModuleNames',
    ];

    public function validate()
    {
        if (\is_array($this->moduleNames)) {
            Model::validateArray($this->moduleNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->moduleNames) {
            if (\is_array($this->moduleNames)) {
                $res['ModuleNames'] = [];
                $n1 = 0;
                foreach ($this->moduleNames as $item1) {
                    $res['ModuleNames'][$n1] = $item1;
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
        if (isset($map['ModuleNames'])) {
            if (!empty($map['ModuleNames'])) {
                $model->moduleNames = [];
                $n1 = 0;
                foreach ($map['ModuleNames'] as $item1) {
                    $model->moduleNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
