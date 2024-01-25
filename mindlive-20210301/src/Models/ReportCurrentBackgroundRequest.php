<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MindLive\V20210301\Models;

use AlibabaCloud\Tea\Model;

class ReportCurrentBackgroundRequest extends Model
{
    /**
     * @var mixed[]
     */
    public $bgConfig;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var bool
     */
    public $open;

    /**
     * @var string
     */
    public $resourceUuid;
    protected $_name = [
        'bgConfig'     => 'BgConfig',
        'mode'         => 'Mode',
        'open'         => 'Open',
        'resourceUuid' => 'ResourceUuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bgConfig) {
            $res['BgConfig'] = $this->bgConfig;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->open) {
            $res['Open'] = $this->open;
        }
        if (null !== $this->resourceUuid) {
            $res['ResourceUuid'] = $this->resourceUuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReportCurrentBackgroundRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BgConfig'])) {
            $model->bgConfig = $map['BgConfig'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['Open'])) {
            $model->open = $map['Open'];
        }
        if (isset($map['ResourceUuid'])) {
            $model->resourceUuid = $map['ResourceUuid'];
        }

        return $model;
    }
}
