<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class GetSiteDeliveryTaskRequest extends Model
{
    /**
     * @example 123456***
     *
     * @var int
     */
    public $siteId;

    /**
     * @description This parameter is required.
     *
     * @example cdn-test-task
     *
     * @var string
     */
    public $taskName;
    protected $_name = [
        'siteId'   => 'SiteId',
        'taskName' => 'TaskName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSiteDeliveryTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        return $model;
    }
}
