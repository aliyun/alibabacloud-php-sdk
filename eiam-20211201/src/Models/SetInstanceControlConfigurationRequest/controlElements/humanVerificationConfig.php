<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\SetInstanceControlConfigurationRequest\controlElements;

use AlibabaCloud\Dara\Model;

class humanVerificationConfig extends Model
{
    /**
     * @var string
     */
    public $humanVerificationType;
    protected $_name = [
        'humanVerificationType' => 'HumanVerificationType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->humanVerificationType) {
            $res['HumanVerificationType'] = $this->humanVerificationType;
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
        if (isset($map['HumanVerificationType'])) {
            $model->humanVerificationType = $map['HumanVerificationType'];
        }

        return $model;
    }
}
