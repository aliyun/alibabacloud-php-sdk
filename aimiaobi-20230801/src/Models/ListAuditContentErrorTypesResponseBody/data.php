<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListAuditContentErrorTypesResponseBody;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListAuditContentErrorTypesResponseBody\data\subClasses;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example ContentAccuracy
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->majorClassCode) {
            $res['MajorClassCode'] = $this->majorClassCode;
        }
        if (null !== $this->majorClassName) {
            $res['MajorClassName'] = $this->majorClassName;
        }
        if (null !== $this->subClasses) {
            $res['SubClasses'] = [];
            if (null !== $this->subClasses && \is_array($this->subClasses)) {
                $n = 0;
                foreach ($this->subClasses as $item) {
                    $res['SubClasses'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
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
                $n = 0;
                foreach ($map['SubClasses'] as $item) {
                    $model->subClasses[$n++] = null !== $item ? subClasses::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
