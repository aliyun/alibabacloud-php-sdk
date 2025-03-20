<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class UpdateSiteDeliveryTaskStatusRequest extends Model
{
    /**
     * @description Specifies whether to enable the delivery task.
     *
     * This parameter is required.
     *
     * @example online
     *
     * @var string
     */
    public $method;

    /**
     * @description The website ID.
     *
     * @example 123456****
     *
     * @var int
     */
    public $siteId;

    /**
     * @description The name of the delivery task.
     *
     * This parameter is required.
     *
     * @example cdn-test-task
     *
     * @var string
     */
    public $taskName;
    protected $_name = [
        'method' => 'Method',
        'siteId' => 'SiteId',
        'taskName' => 'TaskName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->method) {
            $res['Method'] = $this->method;
        }
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
     * @return UpdateSiteDeliveryTaskStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Method'])) {
            $model->method = $map['Method'];
        }
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        return $model;
    }
}
