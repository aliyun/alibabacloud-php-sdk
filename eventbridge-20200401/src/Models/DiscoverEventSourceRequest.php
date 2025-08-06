<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\DiscoverEventSourceRequest\sourceMySQLParameters;

class DiscoverEventSourceRequest extends Model
{
    /**
     * @var sourceMySQLParameters
     */
    public $sourceMySQLParameters;
    protected $_name = [
        'sourceMySQLParameters' => 'SourceMySQLParameters',
    ];

    public function validate()
    {
        if (null !== $this->sourceMySQLParameters) {
            $this->sourceMySQLParameters->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sourceMySQLParameters) {
            $res['SourceMySQLParameters'] = null !== $this->sourceMySQLParameters ? $this->sourceMySQLParameters->toArray($noStream) : $this->sourceMySQLParameters;
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
        if (isset($map['SourceMySQLParameters'])) {
            $model->sourceMySQLParameters = sourceMySQLParameters::fromMap($map['SourceMySQLParameters']);
        }

        return $model;
    }
}
