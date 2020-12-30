<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListEmrAvailableResourceResponseBody\emrZoneInfoList\emrZoneInfo\emrResourceInfoList;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListEmrAvailableResourceResponseBody\emrZoneInfoList\emrZoneInfo\emrResourceInfoList\emrResourceInfo\supportedResourceList;
use AlibabaCloud\Tea\Model;

class emrResourceInfo extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var supportedResourceList
     */
    public $supportedResourceList;
    protected $_name = [
        'type'                  => 'Type',
        'supportedResourceList' => 'SupportedResourceList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->supportedResourceList) {
            $res['SupportedResourceList'] = null !== $this->supportedResourceList ? $this->supportedResourceList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return emrResourceInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['SupportedResourceList'])) {
            $model->supportedResourceList = supportedResourceList::fromMap($map['SupportedResourceList']);
        }

        return $model;
    }
}
