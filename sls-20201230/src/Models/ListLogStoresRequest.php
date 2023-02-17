<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class ListLogStoresRequest extends Model
{
    /**
     * @example my-logstore
     *
     * @var string
     */
    public $logstoreName;

    /**
     * @example standard
     *
     * @var string
     */
    public $mode;

    /**
     * @example 0
     *
     * @var int
     */
    public $offset;

    /**
     * @example 10
     *
     * @var int
     */
    public $size;

    /**
     * @example None
     *
     * @var string
     */
    public $telemetryType;
    protected $_name = [
        'logstoreName'  => 'logstoreName',
        'mode'          => 'mode',
        'offset'        => 'offset',
        'size'          => 'size',
        'telemetryType' => 'telemetryType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logstoreName) {
            $res['logstoreName'] = $this->logstoreName;
        }
        if (null !== $this->mode) {
            $res['mode'] = $this->mode;
        }
        if (null !== $this->offset) {
            $res['offset'] = $this->offset;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        if (null !== $this->telemetryType) {
            $res['telemetryType'] = $this->telemetryType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListLogStoresRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['logstoreName'])) {
            $model->logstoreName = $map['logstoreName'];
        }
        if (isset($map['mode'])) {
            $model->mode = $map['mode'];
        }
        if (isset($map['offset'])) {
            $model->offset = $map['offset'];
        }
        if (isset($map['size'])) {
            $model->size = $map['size'];
        }
        if (isset($map['telemetryType'])) {
            $model->telemetryType = $map['telemetryType'];
        }

        return $model;
    }
}
