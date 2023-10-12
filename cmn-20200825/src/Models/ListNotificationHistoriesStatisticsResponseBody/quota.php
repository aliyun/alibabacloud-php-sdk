<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\ListNotificationHistoriesStatisticsResponseBody;

use AlibabaCloud\Tea\Model;

class quota extends Model
{
    /**
     * @example 10
     *
     * @var string
     */
    public $count;

    /**
     * @example SMS
     *
     * @var string
     */
    public $mode;

    /**
     * @example 10
     *
     * @var string
     */
    public $quota;
    protected $_name = [
        'count' => 'Count',
        'mode'  => 'Mode',
        'quota' => 'Quota',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->quota) {
            $res['Quota'] = $this->quota;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return quota
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['Quota'])) {
            $model->quota = $map['Quota'];
        }

        return $model;
    }
}
