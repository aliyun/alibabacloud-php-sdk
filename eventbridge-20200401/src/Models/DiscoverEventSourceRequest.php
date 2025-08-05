<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\SDK\Eventbridge\V20200401\Models\DiscoverEventSourceRequest\sourceMySQLParameters;
use AlibabaCloud\Tea\Model;

class DiscoverEventSourceRequest extends Model
{
    /**
     * @var sourceMySQLParameters
     */
    public $sourceMySQLParameters;
    protected $_name = [
        'sourceMySQLParameters' => 'SourceMySQLParameters',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceMySQLParameters) {
            $res['SourceMySQLParameters'] = null !== $this->sourceMySQLParameters ? $this->sourceMySQLParameters->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DiscoverEventSourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceMySQLParameters'])) {
            $model->sourceMySQLParameters = sourceMySQLParameters::fromMap($map['SourceMySQLParameters']);
        }

        return $model;
    }
}
