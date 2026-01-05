<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetTaskResponseBody\taskDetail;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetTaskResponseBody\taskDetail\log\terraformLogs;

class log extends Model
{
    /**
     * @var terraformLogs[]
     */
    public $terraformLogs;
    protected $_name = [
        'terraformLogs' => 'TerraformLogs',
    ];

    public function validate()
    {
        if (\is_array($this->terraformLogs)) {
            Model::validateArray($this->terraformLogs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->terraformLogs) {
            if (\is_array($this->terraformLogs)) {
                $res['TerraformLogs'] = [];
                $n1 = 0;
                foreach ($this->terraformLogs as $item1) {
                    $res['TerraformLogs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['TerraformLogs'])) {
            if (!empty($map['TerraformLogs'])) {
                $model->terraformLogs = [];
                $n1 = 0;
                foreach ($map['TerraformLogs'] as $item1) {
                    $model->terraformLogs[$n1] = terraformLogs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
