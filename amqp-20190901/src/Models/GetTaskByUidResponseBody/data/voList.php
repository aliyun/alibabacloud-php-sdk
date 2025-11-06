<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqp\V20190901\Models\GetTaskByUidResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Amqp\V20190901\Models\GetTaskByUidResponseBody\data\voList\importDefinitionTaskDO;

class voList extends Model
{
    /**
     * @var importDefinitionTaskDO[]
     */
    public $importDefinitionTaskDO;
    protected $_name = [
        'importDefinitionTaskDO' => 'ImportDefinitionTaskDO',
    ];

    public function validate()
    {
        if (\is_array($this->importDefinitionTaskDO)) {
            Model::validateArray($this->importDefinitionTaskDO);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->importDefinitionTaskDO) {
            if (\is_array($this->importDefinitionTaskDO)) {
                $res['ImportDefinitionTaskDO'] = [];
                $n1 = 0;
                foreach ($this->importDefinitionTaskDO as $item1) {
                    $res['ImportDefinitionTaskDO'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ImportDefinitionTaskDO'])) {
            if (!empty($map['ImportDefinitionTaskDO'])) {
                $model->importDefinitionTaskDO = [];
                $n1 = 0;
                foreach ($map['ImportDefinitionTaskDO'] as $item1) {
                    $model->importDefinitionTaskDO[$n1] = importDefinitionTaskDO::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
