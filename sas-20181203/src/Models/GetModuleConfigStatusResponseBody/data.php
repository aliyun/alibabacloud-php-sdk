<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetModuleConfigStatusResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetModuleConfigStatusResponseBody\data\moduleConfigResults;

class data extends Model
{
    /**
     * @var moduleConfigResults[]
     */
    public $moduleConfigResults;
    protected $_name = [
        'moduleConfigResults' => 'ModuleConfigResults',
    ];

    public function validate()
    {
        if (\is_array($this->moduleConfigResults)) {
            Model::validateArray($this->moduleConfigResults);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->moduleConfigResults) {
            if (\is_array($this->moduleConfigResults)) {
                $res['ModuleConfigResults'] = [];
                $n1                         = 0;
                foreach ($this->moduleConfigResults as $item1) {
                    $res['ModuleConfigResults'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ModuleConfigResults'])) {
            if (!empty($map['ModuleConfigResults'])) {
                $model->moduleConfigResults = [];
                $n1                         = 0;
                foreach ($map['ModuleConfigResults'] as $item1) {
                    $model->moduleConfigResults[$n1++] = moduleConfigResults::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
