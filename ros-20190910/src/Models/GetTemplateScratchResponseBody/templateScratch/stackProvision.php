<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateScratchResponseBody\templateScratch;

use AlibabaCloud\Tea\Model;

class stackProvision extends Model
{
    /**
     * @description Indicates whether the resource is replicated by calling the [CreateStack](~~132086~~) operation. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $creatable;

    /**
     * @description Indicates whether the resource is managed by calling the [CreateChangeSet](~~131051~~) operation. Valid values:
     *
     *   true
     *   false
     *
     * @example false
     *
     * @var bool
     */
    public $importable;
    protected $_name = [
        'creatable'  => 'Creatable',
        'importable' => 'Importable',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creatable) {
            $res['Creatable'] = $this->creatable;
        }
        if (null !== $this->importable) {
            $res['Importable'] = $this->importable;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stackProvision
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Creatable'])) {
            $model->creatable = $map['Creatable'];
        }
        if (isset($map['Importable'])) {
            $model->importable = $map['Importable'];
        }

        return $model;
    }
}
