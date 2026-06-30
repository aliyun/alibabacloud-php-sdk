<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetAgentTaskResultResponseBody\data\response\fieldResponse;

use AlibabaCloud\Dara\Model;

class fieldVoList extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var int[]
     */
    public $originalUtterances;

    /**
     * @var string
     */
    public $remarks;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'name' => 'Name',
        'originalUtterances' => 'OriginalUtterances',
        'remarks' => 'Remarks',
        'value' => 'Value',
    ];

    public function validate()
    {
        if (\is_array($this->originalUtterances)) {
            Model::validateArray($this->originalUtterances);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->originalUtterances) {
            if (\is_array($this->originalUtterances)) {
                $res['OriginalUtterances'] = [];
                $n1 = 0;
                foreach ($this->originalUtterances as $item1) {
                    $res['OriginalUtterances'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->remarks) {
            $res['Remarks'] = $this->remarks;
        }

        if (null !== $this->value) {
            $res['Value'] = $this->value;
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OriginalUtterances'])) {
            if (!empty($map['OriginalUtterances'])) {
                $model->originalUtterances = [];
                $n1 = 0;
                foreach ($map['OriginalUtterances'] as $item1) {
                    $model->originalUtterances[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Remarks'])) {
            $model->remarks = $map['Remarks'];
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
