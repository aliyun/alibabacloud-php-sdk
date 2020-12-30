<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListEmrAvailableResourceResponseBody\emrZoneInfoList\emrZoneInfo\emrResourceInfoList\emrResourceInfo\supportedResourceList\supportedResource;

use AlibabaCloud\Tea\Model;

class supportNodeTypeList extends Model
{
    /**
     * @var string[]
     */
    public $supportNodeType;
    protected $_name = [
        'supportNodeType' => 'SupportNodeType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->supportNodeType) {
            $res['SupportNodeType'] = $this->supportNodeType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportNodeTypeList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SupportNodeType'])) {
            if (!empty($map['SupportNodeType'])) {
                $model->supportNodeType = $map['SupportNodeType'];
            }
        }

        return $model;
    }
}
