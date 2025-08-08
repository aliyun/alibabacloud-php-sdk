<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Dara\Model;

class RollbackTableRequest extends Model
{
    /**
     * @var FullInstant
     */
    public $instant;
    protected $_name = [
        'instant' => 'instant',
    ];

    public function validate()
    {
        if (null !== $this->instant) {
            $this->instant->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instant) {
            $res['instant'] = null !== $this->instant ? $this->instant->toArray($noStream) : $this->instant;
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
        if (isset($map['instant'])) {
            $model->instant = FullInstant::fromMap($map['instant']);
        }

        return $model;
    }
}
