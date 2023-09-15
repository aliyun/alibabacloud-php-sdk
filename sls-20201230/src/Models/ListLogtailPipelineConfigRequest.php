<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class ListLogtailPipelineConfigRequest extends Model
{
    /**
     * @var string
     */
    public $configName;

    /**
     * @example test-logstore
     *
     * @var string
     */
    public $logstore;

    /**
     * @example 0
     *
     * @var int
     */
    public $offset;

    /**
     * @example 20
     *
     * @var int
     */
    public $size;
    protected $_name = [
        'configName' => 'configName',
        'logstore'   => 'logstore',
        'offset'     => 'offset',
        'size'       => 'size',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configName) {
            $res['configName'] = $this->configName;
        }
        if (null !== $this->logstore) {
            $res['logstore'] = $this->logstore;
        }
        if (null !== $this->offset) {
            $res['offset'] = $this->offset;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListLogtailPipelineConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['configName'])) {
            $model->configName = $map['configName'];
        }
        if (isset($map['logstore'])) {
            $model->logstore = $map['logstore'];
        }
        if (isset($map['offset'])) {
            $model->offset = $map['offset'];
        }
        if (isset($map['size'])) {
            $model->size = $map['size'];
        }

        return $model;
    }
}
