<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20230601\Models;

use AlibabaCloud\Tea\Model;

class ImportEnterpriseDocumentShrinkRequest extends Model
{
    /**
     * @example 5e88c37a5ef34eb8851556344099b626_p_efm
     *
     * @var string
     */
    public $agentKey;

    /**
     * @var int
     */
    public $dataType;

    /**
     * @var string
     */
    public $documentListShrink;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @example 1L
     *
     * @var int
     */
    public $storeId;

    /**
     * @var string
     */
    public $tagsShrink;
    protected $_name = [
        'agentKey'           => 'AgentKey',
        'dataType'           => 'DataType',
        'documentListShrink' => 'DocumentList',
        'ownerId'            => 'OwnerId',
        'storeId'            => 'StoreId',
        'tagsShrink'         => 'Tags',
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
        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }
        if (null !== $this->documentListShrink) {
            $res['DocumentList'] = $this->documentListShrink;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->storeId) {
            $res['StoreId'] = $this->storeId;
        }
        if (null !== $this->tagsShrink) {
            $res['Tags'] = $this->tagsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImportEnterpriseDocumentShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }
        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }
        if (isset($map['DocumentList'])) {
            $model->documentListShrink = $map['DocumentList'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['StoreId'])) {
            $model->storeId = $map['StoreId'];
        }
        if (isset($map['Tags'])) {
            $model->tagsShrink = $map['Tags'];
        }

        return $model;
    }
}
