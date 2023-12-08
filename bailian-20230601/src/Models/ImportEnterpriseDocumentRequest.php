<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20230601\Models;

use AlibabaCloud\SDK\Bailian\V20230601\Models\ImportEnterpriseDocumentRequest\documentList;
use AlibabaCloud\Tea\Model;

class ImportEnterpriseDocumentRequest extends Model
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
     * @var documentList[]
     */
    public $documentList;

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
     * @var string[]
     */
    public $tags;
    protected $_name = [
        'agentKey'     => 'AgentKey',
        'dataType'     => 'DataType',
        'documentList' => 'DocumentList',
        'ownerId'      => 'OwnerId',
        'storeId'      => 'StoreId',
        'tags'         => 'Tags',
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
        if (null !== $this->documentList) {
            $res['DocumentList'] = [];
            if (null !== $this->documentList && \is_array($this->documentList)) {
                $n = 0;
                foreach ($this->documentList as $item) {
                    $res['DocumentList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->storeId) {
            $res['StoreId'] = $this->storeId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImportEnterpriseDocumentRequest
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
            if (!empty($map['DocumentList'])) {
                $model->documentList = [];
                $n                   = 0;
                foreach ($map['DocumentList'] as $item) {
                    $model->documentList[$n++] = null !== $item ? documentList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['StoreId'])) {
            $model->storeId = $map['StoreId'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = $map['Tags'];
            }
        }

        return $model;
    }
}
