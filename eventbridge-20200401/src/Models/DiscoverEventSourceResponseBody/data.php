<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\DiscoverEventSourceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\DiscoverEventSourceResponseBody\data\sourceMySQLDiscovery;

class data extends Model
{
    /**
     * @var sourceMySQLDiscovery
     */
    public $sourceMySQLDiscovery;
    protected $_name = [
        'sourceMySQLDiscovery' => 'SourceMySQLDiscovery',
    ];

    public function validate()
    {
        if (null !== $this->sourceMySQLDiscovery) {
            $this->sourceMySQLDiscovery->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sourceMySQLDiscovery) {
            $res['SourceMySQLDiscovery'] = null !== $this->sourceMySQLDiscovery ? $this->sourceMySQLDiscovery->toArray($noStream) : $this->sourceMySQLDiscovery;
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
        if (isset($map['SourceMySQLDiscovery'])) {
            $model->sourceMySQLDiscovery = sourceMySQLDiscovery::fromMap($map['SourceMySQLDiscovery']);
        }

        return $model;
    }
}
