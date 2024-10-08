<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class CreateSiteDeliveryTaskResponseBody extends Model
{
    /**
     * @example cn
     *
     * @var string
     */
    public $dataCenter;

    /**
     * @description Id of the request
     *
     * @example 9358E852-992D-5BC7-8BD7-975CA02773A8
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 123456****
     *
     * @var string
     */
    public $siteId;

    /**
     * @example er-oss
     *
     * @var string
     */
    public $taskName;
    protected $_name = [
        'dataCenter' => 'DataCenter',
        'requestId'  => 'RequestId',
        'siteId'     => 'SiteId',
        'taskName'   => 'TaskName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataCenter) {
            $res['DataCenter'] = $this->dataCenter;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
     * @return CreateSiteDeliveryTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataCenter'])) {
            $model->dataCenter = $map['DataCenter'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
