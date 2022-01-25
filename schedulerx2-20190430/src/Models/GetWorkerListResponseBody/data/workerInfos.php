<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetWorkerListResponseBody\data;

use AlibabaCloud\Tea\Model;

class workerInfos extends Model
{
    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $label;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $starter;

    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $workerAddress;
    protected $_name = [
        'ip'            => 'Ip',
        'label'         => 'Label',
        'port'          => 'Port',
        'starter'       => 'Starter',
        'version'       => 'Version',
        'workerAddress' => 'WorkerAddress',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->starter) {
            $res['Starter'] = $this->starter;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->workerAddress) {
            $res['WorkerAddress'] = $this->workerAddress;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return workerInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Starter'])) {
            $model->starter = $map['Starter'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['WorkerAddress'])) {
            $model->workerAddress = $map['WorkerAddress'];
        }

        return $model;
    }
}
