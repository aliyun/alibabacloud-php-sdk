<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20230601\Models;

use AlibabaCloud\Tea\Model;

class SearchEnterpriseDataShrinkRequest extends Model
{
    /**
     * @example c160c841c8e54295bf2f441432785944_p_efm
     *
     * @var string
     */
    public $agentKey;

    /**
     * @var string
     */
    public $dataIdListShrink;

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
     * @var string
     */
    public $tagIdListShrink;
    protected $_name = [
        'agentKey'         => 'AgentKey',
        'dataIdListShrink' => 'DataIdList',
        'enableRank'       => 'EnableRank',
        'ownerId'          => 'OwnerId',
        'query'            => 'Query',
        'storeId'          => 'StoreId',
        'tagIdListShrink'  => 'TagIdList',
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
        if (null !== $this->dataIdListShrink) {
            $res['DataIdList'] = $this->dataIdListShrink;
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
        if (null !== $this->tagIdListShrink) {
            $res['TagIdList'] = $this->tagIdListShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchEnterpriseDataShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }
        if (isset($map['DataIdList'])) {
            $model->dataIdListShrink = $map['DataIdList'];
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
            $model->tagIdListShrink = $map['TagIdList'];
        }

        return $model;
    }
}
