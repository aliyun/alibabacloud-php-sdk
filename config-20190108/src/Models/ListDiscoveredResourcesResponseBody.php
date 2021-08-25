<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20190108\Models;

use AlibabaCloud\SDK\Config\V20190108\Models\ListDiscoveredResourcesResponseBody\discoveredResourceProfiles;
use AlibabaCloud\Tea\Model;

class ListDiscoveredResourcesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var discoveredResourceProfiles
     */
    public $discoveredResourceProfiles;
    protected $_name = [
        'requestId'                  => 'RequestId',
        'discoveredResourceProfiles' => 'DiscoveredResourceProfiles',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->discoveredResourceProfiles) {
            $res['DiscoveredResourceProfiles'] = null !== $this->discoveredResourceProfiles ? $this->discoveredResourceProfiles->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDiscoveredResourcesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DiscoveredResourceProfiles'])) {
            $model->discoveredResourceProfiles = discoveredResourceProfiles::fromMap($map['DiscoveredResourceProfiles']);
        }

        return $model;
    }
}
