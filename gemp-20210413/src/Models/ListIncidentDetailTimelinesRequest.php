<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class ListIncidentDetailTimelinesRequest extends Model
{
    /**
     * @description 幂等校验
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description 事件ID
     *
     * @var int
     */
    public $incidentId;

    /**
     * @description 页
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description 行
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'clientToken' => 'clientToken',
        'incidentId'  => 'incidentId',
        'pageNumber'  => 'pageNumber',
        'pageSize'    => 'pageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }
        if (null !== $this->incidentId) {
            $res['incidentId'] = $this->incidentId;
        }
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListIncidentDetailTimelinesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['incidentId'])) {
            $model->incidentId = $map['incidentId'];
        }
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        return $model;
    }
}
