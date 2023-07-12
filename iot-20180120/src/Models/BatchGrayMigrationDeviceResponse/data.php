<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\BatchGrayMigrationDeviceResponse;

use AlibabaCloud\SDK\Iot\V20180120\Models\BatchGrayMigrationDeviceResponse\data\details;
use AlibabaCloud\Tea\Model;

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
        Model::validateRequired('details', $this->details, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->details) {
            $res['Details'] = null !== $this->details ? $this->details->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Details'])) {
            $model->details = details::fromMap($map['Details']);
        }

        return $model;
    }
}
