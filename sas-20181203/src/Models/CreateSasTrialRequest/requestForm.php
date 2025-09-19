<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\CreateSasTrialRequest;

use AlibabaCloud\Dara\Model;

class requestForm extends Model
{
    /**
     * @var string
     */
    public $tryReason;
    protected $_name = [
        'tryReason' => 'TryReason',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tryReason) {
            $res['TryReason'] = $this->tryReason;
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
        if (isset($map['TryReason'])) {
            $model->tryReason = $map['TryReason'];
        }

        return $model;
    }
}
