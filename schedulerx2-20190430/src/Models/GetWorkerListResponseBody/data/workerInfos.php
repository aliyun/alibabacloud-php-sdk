<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetWorkerListResponseBody\data;

use AlibabaCloud\Tea\Model;

class workerInfos extends Model
{
    /**
     * @description The IP address of the worker.
     *
     * @example 30.225.16.49
     *
     * @var string
     */
    public $ip;

    /**
     * @description The label of the worker.
     *
     * @example gray
     *
     * @var string
     */
    public $label;

    /**
     * @description The port number of the worker.
     *
     * @example 60831
     *
     * @var int
     */
    public $port;

    /**
     * @description The startup method of the worker.
     *
     * @example springboot
     *
     * @var string
     */
    public $starter;

    /**
     * @description The version of the worker.
     *
     * @example 1.3.4
     *
     * @var string
     */
    public $version;

    /**
     * @description The address of the worker. The address is in the format of ${worker_id}@${worker_ip}:${worker_port}.
     *
     * @example 030225016049_11734_25917@30.225.16.49:60831
     *
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
