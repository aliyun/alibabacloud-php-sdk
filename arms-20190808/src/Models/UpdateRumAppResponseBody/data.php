<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateRumAppResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The user configurations. This is a reserved parameter.
     *
     * @var string
     */
    public $config;

    /**
     * @description The QPS limit. Unit: bytes.
     *
     * @example 100000
     *
     * @var int
     */
    public $limit;

    /**
     * @description Indicates whether the request is throttled due to the QPS limit. Valid values: true and false.
     *
     * @example true
     *
     * @var bool
     */
    public $limited;

    /**
     * @description The usage. Unit: bytes.
     *
     * @example 10000
     *
     * @var int
     */
    public $usage;
    protected $_name = [
        'config'  => 'Config',
        'limit'   => 'Limit',
        'limited' => 'Limited',
        'usage'   => 'Usage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }
        if (null !== $this->limited) {
            $res['Limited'] = $this->limited;
        }
        if (null !== $this->usage) {
            $res['Usage'] = $this->usage;
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
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }
        if (isset($map['Limited'])) {
            $model->limited = $map['Limited'];
        }
        if (isset($map['Usage'])) {
            $model->usage = $map['Usage'];
        }

        return $model;
    }
}
