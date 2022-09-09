<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\ListResourceExportTasksResponseBody\exportTasks;

use AlibabaCloud\Tea\Model;

class modules extends Model
{
    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $sourcePath;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'source'     => 'source',
        'sourcePath' => 'sourcePath',
        'version'    => 'version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->source) {
            $res['source'] = $this->source;
        }
        if (null !== $this->sourcePath) {
            $res['sourcePath'] = $this->sourcePath;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return modules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['source'])) {
            $model->source = $map['source'];
        }
        if (isset($map['sourcePath'])) {
            $model->sourcePath = $map['sourcePath'];
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
