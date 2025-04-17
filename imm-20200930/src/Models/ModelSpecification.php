<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

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
        'spec' => 'Spec',
    ];

    public function validate()
    {
        if (null !== $this->metaData) {
            $this->metaData->validate();
        }
        if (null !== $this->spec) {
            $this->spec->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->metaData) {
            $res['MetaData'] = null !== $this->metaData ? $this->metaData->toArray($noStream) : $this->metaData;
        }

        if (null !== $this->spec) {
            $res['Spec'] = null !== $this->spec ? $this->spec->toArray($noStream) : $this->spec;
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
        if (isset($map['MetaData'])) {
            $model->metaData = MetaData::fromMap($map['MetaData']);
        }

        if (isset($map['Spec'])) {
            $model->spec = Spec::fromMap($map['Spec']);
        }

        return $model;
    }
}
