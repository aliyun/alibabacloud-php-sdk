<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ModelSpecification extends Model
{
    /**
     * @var MetaData
     */
    public $metaData;

    /**
     * @var Spec
     */
    public $spec;
    protected $_name = [
        'metaData' => 'MetaData',
        'spec'     => 'Spec',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->metaData) {
            $res['MetaData'] = null !== $this->metaData ? $this->metaData->toMap() : null;
        }
        if (null !== $this->spec) {
            $res['Spec'] = null !== $this->spec ? $this->spec->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModelSpecification
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MetaData'])) {
            $model->metaData = MetaData::fromMap($map['MetaData']);
        }
        if (isset($map['Spec'])) {
            $model->spec = Spec::fromMap($map['Spec']);
        }

        return $model;
    }
}
