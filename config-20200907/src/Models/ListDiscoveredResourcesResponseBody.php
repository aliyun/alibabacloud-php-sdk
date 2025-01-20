<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\ListDiscoveredResourcesResponseBody\discoveredResourceProfiles;

class ListDiscoveredResourcesResponseBody extends Model
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
        if (null !== $this->discoveredResourceProfiles) {
            $this->discoveredResourceProfiles->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->discoveredResourceProfiles) {
            $res['DiscoveredResourceProfiles'] = null !== $this->discoveredResourceProfiles ? $this->discoveredResourceProfiles->toArray($noStream) : $this->discoveredResourceProfiles;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DiscoveredResourceProfiles'])) {
            $model->discoveredResourceProfiles = discoveredResourceProfiles::fromMap($map['DiscoveredResourceProfiles']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
