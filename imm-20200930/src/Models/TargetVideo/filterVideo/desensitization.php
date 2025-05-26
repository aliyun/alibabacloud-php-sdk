<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\TargetVideo\filterVideo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Imm\V20200930\Models\TargetVideo\filterVideo\desensitization\face;
use AlibabaCloud\SDK\Imm\V20200930\Models\TargetVideo\filterVideo\desensitization\licensePlate;

class desensitization extends Model
{
    /**
     * @var face
     */
    public $face;

    /**
     * @var licensePlate
     */
    public $licensePlate;
    protected $_name = [
        'face' => 'Face',
        'licensePlate' => 'LicensePlate',
    ];

    public function validate()
    {
        if (null !== $this->face) {
            $this->face->validate();
        }
        if (null !== $this->licensePlate) {
            $this->licensePlate->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->face) {
            $res['Face'] = null !== $this->face ? $this->face->toArray($noStream) : $this->face;
        }

        if (null !== $this->licensePlate) {
            $res['LicensePlate'] = null !== $this->licensePlate ? $this->licensePlate->toArray($noStream) : $this->licensePlate;
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
        if (isset($map['Face'])) {
            $model->face = face::fromMap($map['Face']);
        }

        if (isset($map['LicensePlate'])) {
            $model->licensePlate = licensePlate::fromMap($map['LicensePlate']);
        }

        return $model;
    }
}
