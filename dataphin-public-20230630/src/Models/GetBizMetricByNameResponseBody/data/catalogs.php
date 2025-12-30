<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetBizMetricByNameResponseBody\data;

use AlibabaCloud\Dara\Model;

class catalogs extends Model
{
    /**
     * @var string
     */
    public $catalogDesc;

    /**
     * @var int
     */
    public $catalogId;

    /**
     * @var string
     */
    public $catalogName;

    /**
     * @var int
     */
    public $parentCatalogId;

    /**
     * @var string
     */
    public $parentPath;

    /**
     * @var int
     */
    public $topicId;

    /**
     * @var string
     */
    public $topicName;
    protected $_name = [
        'catalogDesc' => 'CatalogDesc',
        'catalogId' => 'CatalogId',
        'catalogName' => 'CatalogName',
        'parentCatalogId' => 'ParentCatalogId',
        'parentPath' => 'ParentPath',
        'topicId' => 'TopicId',
        'topicName' => 'TopicName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->catalogDesc) {
            $res['CatalogDesc'] = $this->catalogDesc;
        }

        if (null !== $this->catalogId) {
            $res['CatalogId'] = $this->catalogId;
        }

        if (null !== $this->catalogName) {
            $res['CatalogName'] = $this->catalogName;
        }

        if (null !== $this->parentCatalogId) {
            $res['ParentCatalogId'] = $this->parentCatalogId;
        }

        if (null !== $this->parentPath) {
            $res['ParentPath'] = $this->parentPath;
        }

        if (null !== $this->topicId) {
            $res['TopicId'] = $this->topicId;
        }

        if (null !== $this->topicName) {
            $res['TopicName'] = $this->topicName;
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
        if (isset($map['CatalogDesc'])) {
            $model->catalogDesc = $map['CatalogDesc'];
        }

        if (isset($map['CatalogId'])) {
            $model->catalogId = $map['CatalogId'];
        }

        if (isset($map['CatalogName'])) {
            $model->catalogName = $map['CatalogName'];
        }

        if (isset($map['ParentCatalogId'])) {
            $model->parentCatalogId = $map['ParentCatalogId'];
        }

        if (isset($map['ParentPath'])) {
            $model->parentPath = $map['ParentPath'];
        }

        if (isset($map['TopicId'])) {
            $model->topicId = $map['TopicId'];
        }

        if (isset($map['TopicName'])) {
            $model->topicName = $map['TopicName'];
        }

        return $model;
    }
}
