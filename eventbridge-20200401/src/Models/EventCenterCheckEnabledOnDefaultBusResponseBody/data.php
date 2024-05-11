<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\EventCenterCheckEnabledOnDefaultBusResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $enabled;
    protected $_name = [
        'enabled' => 'Enabled',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
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
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        return $model;
    }
}
