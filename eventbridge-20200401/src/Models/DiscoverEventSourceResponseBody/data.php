<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\DiscoverEventSourceResponseBody;

use AlibabaCloud\SDK\Eventbridge\V20200401\Models\DiscoverEventSourceResponseBody\data\sourceMySQLDiscovery;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var sourceMySQLDiscovery
     */
    public $sourceMySQLDiscovery;
    protected $_name = [
        'sourceMySQLDiscovery' => 'SourceMySQLDiscovery',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceMySQLDiscovery) {
            $res['SourceMySQLDiscovery'] = null !== $this->sourceMySQLDiscovery ? $this->sourceMySQLDiscovery->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceMySQLDiscovery'])) {
            $model->sourceMySQLDiscovery = sourceMySQLDiscovery::fromMap($map['SourceMySQLDiscovery']);
        }

        return $model;
    }
}
