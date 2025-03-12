<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\CreateSasTrialRequest;

use AlibabaCloud\Tea\Model;

class requestForm extends Model
{
    /**
     * @description The reason why you apply for the trial.
     *
     * @example for poc
     *
     * @var string
     */
    public $tryReason;
    protected $_name = [
        'tryReason' => 'TryReason',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tryReason) {
            $res['TryReason'] = $this->tryReason;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return requestForm
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TryReason'])) {
            $model->tryReason = $map['TryReason'];
        }

        return $model;
    }
}
