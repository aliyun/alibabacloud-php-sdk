<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateScratchResponseBody\templateScratch;

use AlibabaCloud\Dara\Model;

class stackProvision extends Model
{
    /**
     * @var bool
     */
    public $creatable;

    /**
     * @var bool
     */
    public $importable;
    protected $_name = [
        'creatable' => 'Creatable',
        'importable' => 'Importable',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
