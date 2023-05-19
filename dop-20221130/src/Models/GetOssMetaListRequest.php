<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dop\V20221130\Models;

use AlibabaCloud\Tea\Model;

class GetOssMetaListRequest extends Model
{
    /**
     * @example 20221228
     *
     * @var string
     */
    public $end;

    /**
     * @example 20221228
     *
     * @var string
     */
    public $start;

    /**
     * @example dwd_ump_log_uapp_event_json_di
     *
     * @var string
     */
    public $tableName;
    protected $_name = [
        'end'       => 'end',
        'start'     => 'start',
        'tableName' => 'tableName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->end) {
            $res['end'] = $this->end;
        }
        if (null !== $this->start) {
            $res['start'] = $this->start;
        }
        if (null !== $this->tableName) {
            $res['tableName'] = $this->tableName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetOssMetaListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['end'])) {
            $model->end = $map['end'];
        }
        if (isset($map['start'])) {
            $model->start = $map['start'];
        }
        if (isset($map['tableName'])) {
            $model->tableName = $map['tableName'];
        }

        return $model;
    }
}
