<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListCatalogAssetsRequest;

use AlibabaCloud\Dara\Model;

class listCatalogAssetsQuery extends Model
{
    /**
     * @var string
     */
    public $assetType;

    /**
     * @var string
     */
    public $keyword;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $queryMode;

    /**
     * @var int[]
     */
    public $shelveDirectoryIds;
    protected $_name = [
        'assetType' => 'AssetType',
        'keyword' => 'Keyword',
        'name' => 'Name',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'queryMode' => 'QueryMode',
        'shelveDirectoryIds' => 'ShelveDirectoryIds',
    ];

    public function validate()
    {
        if (\is_array($this->shelveDirectoryIds)) {
            Model::validateArray($this->shelveDirectoryIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assetType) {
            $res['AssetType'] = $this->assetType;
        }

        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->queryMode) {
            $res['QueryMode'] = $this->queryMode;
        }

        if (null !== $this->shelveDirectoryIds) {
            if (\is_array($this->shelveDirectoryIds)) {
                $res['ShelveDirectoryIds'] = [];
                $n1 = 0;
                foreach ($this->shelveDirectoryIds as $item1) {
                    $res['ShelveDirectoryIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AssetType'])) {
            $model->assetType = $map['AssetType'];
        }

        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['QueryMode'])) {
            $model->queryMode = $map['QueryMode'];
        }

        if (isset($map['ShelveDirectoryIds'])) {
            if (!empty($map['ShelveDirectoryIds'])) {
                $model->shelveDirectoryIds = [];
                $n1 = 0;
                foreach ($map['ShelveDirectoryIds'] as $item1) {
                    $model->shelveDirectoryIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
