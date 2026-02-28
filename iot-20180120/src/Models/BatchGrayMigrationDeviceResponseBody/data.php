<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\BatchGrayMigrationDeviceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchGrayMigrationDeviceResponseBody\data\details;

class data extends Model
{
    /**
     * @var details
     */
    public $details;
    protected $_name = [
        'details' => 'Details',
    ];

    public function validate()
    {
        if (null !== $this->details) {
            $this->details->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->details) {
            $res['Details'] = null !== $this->details ? $this->details->toArray($noStream) : $this->details;
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
        if (isset($map['Details'])) {
            $model->details = details::fromMap($map['Details']);
        }

        return $model;
    }
}
