<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIRegistry\V20260317\Models;

use AlibabaCloud\Dara\Model;

class ListPromptsRequest extends Model
{
    /**
     * @var string
     */
    public $bizTags;

    /**
     * @var string
     */
    public $namespaceId;

    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $promptKey;

    /**
     * @var string
     */
    public $search;
    protected $_name = [
        'bizTags' => 'BizTags',
        'namespaceId' => 'NamespaceId',
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'promptKey' => 'PromptKey',
        'search' => 'Search',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizTags) {
            $res['BizTags'] = $this->bizTags;
        }

        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }

        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->promptKey) {
            $res['PromptKey'] = $this->promptKey;
        }

        if (null !== $this->search) {
            $res['Search'] = $this->search;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizTags'])) {
            $model->bizTags = $map['BizTags'];
        }

        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }

        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['PromptKey'])) {
            $model->promptKey = $map['PromptKey'];
        }

        if (isset($map['Search'])) {
            $model->search = $map['Search'];
        }

        return $model;
    }
}
