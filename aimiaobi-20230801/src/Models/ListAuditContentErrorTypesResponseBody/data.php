<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListAuditContentErrorTypesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListAuditContentErrorTypesResponseBody\data\subClasses;

class data extends Model
{
    /**
     * @var string
     */
    public $majorClassCode;

    /**
     * @var string
     */
    public $majorClassName;

    /**
     * @var subClasses[]
     */
    public $subClasses;
    protected $_name = [
        'majorClassCode' => 'MajorClassCode',
        'majorClassName' => 'MajorClassName',
        'subClasses' => 'SubClasses',
    ];

    public function validate()
    {
        if (\is_array($this->subClasses)) {
            Model::validateArray($this->subClasses);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->majorClassCode) {
            $res['MajorClassCode'] = $this->majorClassCode;
        }

        if (null !== $this->majorClassName) {
            $res['MajorClassName'] = $this->majorClassName;
        }

        if (null !== $this->subClasses) {
            if (\is_array($this->subClasses)) {
                $res['SubClasses'] = [];
                $n1 = 0;
                foreach ($this->subClasses as $item1) {
                    $res['SubClasses'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['MajorClassCode'])) {
            $model->majorClassCode = $map['MajorClassCode'];
        }

        if (isset($map['MajorClassName'])) {
            $model->majorClassName = $map['MajorClassName'];
        }

        if (isset($map['SubClasses'])) {
            if (!empty($map['SubClasses'])) {
                $model->subClasses = [];
                $n1 = 0;
                foreach ($map['SubClasses'] as $item1) {
                    $model->subClasses[$n1] = subClasses::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
