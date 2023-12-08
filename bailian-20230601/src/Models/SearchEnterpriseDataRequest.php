<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20230601\Models;

use AlibabaCloud\Tea\Model;

class SearchEnterpriseDataRequest extends Model
{
    /**
     * @example c160c841c8e54295bf2f441432785944_p_efm
     *
     * @var string
     */
    public $agentKey;

    /**
     * @var string[]
     */
    public $dataIdList;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableRank;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $query;

    /**
     * @example s-6feuw0nabn
     *
     * @var int
     */
    public $storeId;

    /**
     * @var int[]
     */
    public $tagIdList;
    protected $_name = [
        'agentKey'   => 'AgentKey',
        'dataIdList' => 'DataIdList',
        'enableRank' => 'EnableRank',
        'ownerId'    => 'OwnerId',
        'query'      => 'Query',
        'storeId'    => 'StoreId',
        'tagIdList'  => 'TagIdList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }
        if (null !== $this->dataIdList) {
            $res['DataIdList'] = $this->dataIdList;
        }
        if (null !== $this->enableRank) {
            $res['EnableRank'] = $this->enableRank;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->query) {
            $res['Query'] = $this->query;
        }
        if (null !== $this->storeId) {
            $res['StoreId'] = $this->storeId;
        }
        if (null !== $this->tagIdList) {
            $res['TagIdList'] = $this->tagIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchEnterpriseDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }
        if (isset($map['DataIdList'])) {
            if (!empty($map['DataIdList'])) {
                $model->dataIdList = $map['DataIdList'];
            }
        }
        if (isset($map['EnableRank'])) {
            $model->enableRank = $map['EnableRank'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Query'])) {
            $model->query = $map['Query'];
        }
        if (isset($map['StoreId'])) {
            $model->storeId = $map['StoreId'];
        }
        if (isset($map['TagIdList'])) {
            if (!empty($map['TagIdList'])) {
                $model->tagIdList = $map['TagIdList'];
            }
        }

        return $model;
    }
}
