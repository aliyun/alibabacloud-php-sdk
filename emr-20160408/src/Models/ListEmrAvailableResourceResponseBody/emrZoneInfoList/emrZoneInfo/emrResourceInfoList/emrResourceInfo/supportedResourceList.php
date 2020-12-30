<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListEmrAvailableResourceResponseBody\emrZoneInfoList\emrZoneInfo\emrResourceInfoList\emrResourceInfo;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListEmrAvailableResourceResponseBody\emrZoneInfoList\emrZoneInfo\emrResourceInfoList\emrResourceInfo\supportedResourceList\supportedResource;
use AlibabaCloud\Tea\Model;

class supportedResourceList extends Model
{
    /**
     * @var supportedResource[]
     */
    public $supportedResource;
    protected $_name = [
        'supportedResource' => 'SupportedResource',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->supportedResource) {
            $res['SupportedResource'] = [];
            if (null !== $this->supportedResource && \is_array($this->supportedResource)) {
                $n = 0;
                foreach ($this->supportedResource as $item) {
                    $res['SupportedResource'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportedResourceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SupportedResource'])) {
            if (!empty($map['SupportedResource'])) {
                $model->supportedResource = [];
                $n                        = 0;
                foreach ($map['SupportedResource'] as $item) {
                    $model->supportedResource[$n++] = null !== $item ? supportedResource::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
