<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateDiscoveredResourcesResponseBody\discoveredResourceProfiles;
use AlibabaCloud\Tea\Model;

class ListAggregateDiscoveredResourcesResponseBody extends Model
{
    /**
     * @var discoveredResourceProfiles
     */
    public $discoveredResourceProfiles;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'discoveredResourceProfiles' => 'DiscoveredResourceProfiles',
        'requestId'                  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->discoveredResourceProfiles) {
            $res['DiscoveredResourceProfiles'] = null !== $this->discoveredResourceProfiles ? $this->discoveredResourceProfiles->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAggregateDiscoveredResourcesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiscoveredResourceProfiles'])) {
            $model->discoveredResourceProfiles = discoveredResourceProfiles::fromMap($map['DiscoveredResourceProfiles']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
