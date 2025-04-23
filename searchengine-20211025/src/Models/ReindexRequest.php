<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Dara\Model;

class ReindexRequest extends Model
{
    /**
     * @var int
     */
    public $dataTimeSec;

    /**
     * @var string
     */
    public $ossDataPath;

    /**
     * @var string
     */
    public $partition;
    protected $_name = [
        'dataTimeSec' => 'dataTimeSec',
        'ossDataPath' => 'ossDataPath',
        'partition' => 'partition',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataTimeSec) {
            $res['dataTimeSec'] = $this->dataTimeSec;
        }

        if (null !== $this->ossDataPath) {
            $res['ossDataPath'] = $this->ossDataPath;
        }

        if (null !== $this->partition) {
            $res['partition'] = $this->partition;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dataTimeSec'])) {
            $model->dataTimeSec = $map['dataTimeSec'];
        }

        if (isset($map['ossDataPath'])) {
            $model->ossDataPath = $map['ossDataPath'];
        }

        if (isset($map['partition'])) {
            $model->partition = $map['partition'];
        }

        return $model;
    }
}
