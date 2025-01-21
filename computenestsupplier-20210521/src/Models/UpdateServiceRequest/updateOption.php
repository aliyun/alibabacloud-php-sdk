<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateServiceRequest;

use AlibabaCloud\Dara\Model;

class updateOption extends Model
{
    /**
     * @var bool
     */
    public $updateArtifact;
    /**
     * @var string
     */
    public $updateFrom;
    protected $_name = [
        'updateArtifact' => 'UpdateArtifact',
        'updateFrom'     => 'UpdateFrom',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->updateArtifact) {
            $res['UpdateArtifact'] = $this->updateArtifact;
        }

        if (null !== $this->updateFrom) {
            $res['UpdateFrom'] = $this->updateFrom;
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
        if (isset($map['UpdateArtifact'])) {
            $model->updateArtifact = $map['UpdateArtifact'];
        }

        if (isset($map['UpdateFrom'])) {
            $model->updateFrom = $map['UpdateFrom'];
        }

        return $model;
    }
}
