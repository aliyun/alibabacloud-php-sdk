<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListEmrAvailableResourceResponseBody\emrZoneInfoList\emrZoneInfo\emrResourceInfoList;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListEmrAvailableResourceResponseBody\emrZoneInfoList\emrZoneInfo\emrResourceInfoList\emrResourceInfo\supportedResourceList;
use AlibabaCloud\Tea\Model;

class emrResourceInfo extends Model
{
    /**
     * @var supportedResourceList
     */
    public $supportedResourceList;

    /**
     * @example DataDisk
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'supportedResourceList' => 'SupportedResourceList',
        'type'                  => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->supportedResourceList) {
            $res['SupportedResourceList'] = null !== $this->supportedResourceList ? $this->supportedResourceList->toMap() : null;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['SupportedResourceList'])) {
            $model->supportedResourceList = supportedResourceList::fromMap($map['SupportedResourceList']);
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
