<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class ListLogtailPipelineConfigRequest extends Model
{
    /**
     * @description The name of the Logtail pipeline configuration.
     *
     * @example logtail-config-sample
     *
     * @var string
     */
    public $configName;

    /**
     * @description The name of the Logstore.
     *
     * @example test-logstore
     *
     * @var string
     */
    public $logstoreName;

    /**
     * @description The line from which the query starts.
     *
     * @example 0
     *
     * @var int
     */
    public $offset;

    /**
     * @description The number of Logtail pipeline configurations per page.
     *
     * @example 20
     *
     * @var int
     */
    public $size;
    protected $_name = [
        'configName'   => 'configName',
        'logstoreName' => 'logstoreName',
        'offset'       => 'offset',
        'size'         => 'size',
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
        if (null !== $this->logstoreName) {
            $res['logstoreName'] = $this->logstoreName;
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
        if (isset($map['logstoreName'])) {
            $model->logstoreName = $map['logstoreName'];
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
