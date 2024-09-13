<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ListVpcPublishedRouteEntriesResponseBody\routeEntries;

use AlibabaCloud\Tea\Model;

class routePublishTargets extends Model
{
    /**
     * @example Published
     *
     * @var string
     */
    public $publishStatus;

    /**
     * @var string
     */
    public $publishTargetInstanceId;

    /**
     * @example ECR
     *
     * @var string
     */
    public $publishTargetType;
    protected $_name = [
        'publishStatus'           => 'PublishStatus',
        'publishTargetInstanceId' => 'PublishTargetInstanceId',
        'publishTargetType'       => 'PublishTargetType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->publishStatus) {
            $res['PublishStatus'] = $this->publishStatus;
        }
        if (null !== $this->publishTargetInstanceId) {
            $res['PublishTargetInstanceId'] = $this->publishTargetInstanceId;
        }
        if (null !== $this->publishTargetType) {
            $res['PublishTargetType'] = $this->publishTargetType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return routePublishTargets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PublishStatus'])) {
            $model->publishStatus = $map['PublishStatus'];
        }
        if (isset($map['PublishTargetInstanceId'])) {
            $model->publishTargetInstanceId = $map['PublishTargetInstanceId'];
        }
        if (isset($map['PublishTargetType'])) {
            $model->publishTargetType = $map['PublishTargetType'];
        }

        return $model;
    }
}
