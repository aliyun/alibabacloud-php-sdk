<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sls\V20201230\Models\SubmitAsyncSqlParams\extensions;

class SubmitAsyncSqlParams extends Model
{
    /**
     * @var extensions
     */
    public $extensions;

    /**
     * @var int
     */
    public $from;

    /**
     * @var string
     */
    public $logstore;

    /**
     * @var string
     */
    public $query;

    /**
     * @var int
     */
    public $to;
    protected $_name = [
        'extensions' => 'extensions',
        'from' => 'from',
        'logstore' => 'logstore',
        'query' => 'query',
        'to' => 'to',
    ];

    public function validate()
    {
        if (null !== $this->extensions) {
            $this->extensions->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->extensions) {
            $res['extensions'] = null !== $this->extensions ? $this->extensions->toArray($noStream) : $this->extensions;
        }

        if (null !== $this->from) {
            $res['from'] = $this->from;
        }

        if (null !== $this->logstore) {
            $res['logstore'] = $this->logstore;
        }

        if (null !== $this->query) {
            $res['query'] = $this->query;
        }

        if (null !== $this->to) {
            $res['to'] = $this->to;
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
        if (isset($map['extensions'])) {
            $model->extensions = extensions::fromMap($map['extensions']);
        }

        if (isset($map['from'])) {
            $model->from = $map['from'];
        }

        if (isset($map['logstore'])) {
            $model->logstore = $map['logstore'];
        }

        if (isset($map['query'])) {
            $model->query = $map['query'];
        }

        if (isset($map['to'])) {
            $model->to = $map['to'];
        }

        return $model;
    }
}
