<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\GetDownloadJobResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetDownloadJobResponseBody\configuration\sink;

class configuration extends Model
{
    /**
     * @var bool
     */
    public $allowInComplete;

    /**
     * @var int
     */
    public $fromTime;

    /**
     * @var string
     */
    public $logstore;

    /**
     * @var bool
     */
    public $powerSql;

    /**
     * @var string
     */
    public $query;

    /**
     * @var sink
     */
    public $sink;

    /**
     * @var int
     */
    public $toTime;
    protected $_name = [
        'allowInComplete' => 'allowInComplete',
        'fromTime' => 'fromTime',
        'logstore' => 'logstore',
        'powerSql' => 'powerSql',
        'query' => 'query',
        'sink' => 'sink',
        'toTime' => 'toTime',
    ];

    public function validate()
    {
        if (null !== $this->sink) {
            $this->sink->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowInComplete) {
            $res['allowInComplete'] = $this->allowInComplete;
        }

        if (null !== $this->fromTime) {
            $res['fromTime'] = $this->fromTime;
        }

        if (null !== $this->logstore) {
            $res['logstore'] = $this->logstore;
        }

        if (null !== $this->powerSql) {
            $res['powerSql'] = $this->powerSql;
        }

        if (null !== $this->query) {
            $res['query'] = $this->query;
        }

        if (null !== $this->sink) {
            $res['sink'] = null !== $this->sink ? $this->sink->toArray($noStream) : $this->sink;
        }

        if (null !== $this->toTime) {
            $res['toTime'] = $this->toTime;
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
        if (isset($map['allowInComplete'])) {
            $model->allowInComplete = $map['allowInComplete'];
        }

        if (isset($map['fromTime'])) {
            $model->fromTime = $map['fromTime'];
        }

        if (isset($map['logstore'])) {
            $model->logstore = $map['logstore'];
        }

        if (isset($map['powerSql'])) {
            $model->powerSql = $map['powerSql'];
        }

        if (isset($map['query'])) {
            $model->query = $map['query'];
        }

        if (isset($map['sink'])) {
            $model->sink = sink::fromMap($map['sink']);
        }

        if (isset($map['toTime'])) {
            $model->toTime = $map['toTime'];
        }

        return $model;
    }
}
