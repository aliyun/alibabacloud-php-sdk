<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class ListIntegrationConfigTimelinesRequest extends Model
{
    /**
     * @description 集成配置id
     *
     * @var int
     */
    public $integrationConfigId;

    /**
     * @description 分页参数
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description 分页参数
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description 幂等参数
     *
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'integrationConfigId' => 'integrationConfigId',
        'pageNumber'          => 'pageNumber',
        'pageSize'            => 'pageSize',
        'clientToken'         => 'clientToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->integrationConfigId) {
            $res['integrationConfigId'] = $this->integrationConfigId;
        }
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListIntegrationConfigTimelinesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['integrationConfigId'])) {
            $model->integrationConfigId = $map['integrationConfigId'];
        }
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }

        return $model;
    }
}
