<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateDesktopGroupResponse extends Model
{
    /**
     * @var string
     */
    public $desktopGroupId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $orderIds;
    protected $_name = [
        'desktopGroupId' => 'DesktopGroupId',
        'requestId'      => 'RequestId',
        'orderIds'       => 'OrderIds',
    ];

    public function validate()
    {
        Model::validateRequired('desktopGroupId', $this->desktopGroupId, true);
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('orderIds', $this->orderIds, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->desktopGroupId) {
            $res['DesktopGroupId'] = $this->desktopGroupId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->orderIds) {
            $res['OrderIds'] = $this->orderIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDesktopGroupResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DesktopGroupId'])) {
            $model->desktopGroupId = $map['DesktopGroupId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['OrderIds'])) {
            if (!empty($map['OrderIds'])) {
                $model->orderIds = $map['OrderIds'];
            }
        }

        return $model;
    }
}
