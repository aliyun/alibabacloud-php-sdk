<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dop\V20221130\Models;

use AlibabaCloud\Tea\Model;

class GetOssMetaDownloadRequest extends Model
{
    /**
     * @example 20221226
     *
     * @var string
     */
    public $ds;

    /**
     * @example 3600
     *
     * @var int
     */
    public $expire;

    /**
     * @example dwd_ump_log_uapp_event_json_di
     *
     * @var string
     */
    public $tableName;
    protected $_name = [
        'ds'        => 'ds',
        'expire'    => 'expire',
        'tableName' => 'tableName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ds) {
            $res['ds'] = $this->ds;
        }
        if (null !== $this->expire) {
            $res['expire'] = $this->expire;
        }
        if (null !== $this->tableName) {
            $res['tableName'] = $this->tableName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetOssMetaDownloadRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ds'])) {
            $model->ds = $map['ds'];
        }
        if (isset($map['expire'])) {
            $model->expire = $map['expire'];
        }
        if (isset($map['tableName'])) {
            $model->tableName = $map['tableName'];
        }

        return $model;
    }
}
