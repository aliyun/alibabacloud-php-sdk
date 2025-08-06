<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eipanycast\V20200309\Models;

use AlibabaCloud\Dara\Model;

class ModifyAnycastEipAddressSpecRequest extends Model
{
    /**
     * @var string
     */
    public $anycastId;

    /**
     * @var string
     */
    public $bandwidth;
    protected $_name = [
        'anycastId' => 'AnycastId',
        'bandwidth' => 'Bandwidth',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->anycastId) {
            $res['AnycastId'] = $this->anycastId;
        }

        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
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
        if (isset($map['AnycastId'])) {
            $model->anycastId = $map['AnycastId'];
        }

        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }

        return $model;
    }
}
