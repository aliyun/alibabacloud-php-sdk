<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\GetCatalogListResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $isvSubId;

    /**
     * @var int
     */
    public $parentCatalogId;

    /**
     * @var int
     */
    public $profileCount;

    /**
     * @var int
     */
    public $catalogId;

    /**
     * @var string
     */
    public $catalogName;
    protected $_name = [
        'isvSubId'        => 'IsvSubId',
        'parentCatalogId' => 'ParentCatalogId',
        'profileCount'    => 'ProfileCount',
        'catalogId'       => 'CatalogId',
        'catalogName'     => 'CatalogName',
    ];

    public function validate()
    {
        Model::validateRequired('isvSubId', $this->isvSubId, true);
        Model::validateRequired('parentCatalogId', $this->parentCatalogId, true);
        Model::validateRequired('profileCount', $this->profileCount, true);
        Model::validateRequired('catalogId', $this->catalogId, true);
        Model::validateRequired('catalogName', $this->catalogName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isvSubId) {
            $res['IsvSubId'] = $this->isvSubId;
        }
        if (null !== $this->parentCatalogId) {
            $res['ParentCatalogId'] = $this->parentCatalogId;
        }
        if (null !== $this->profileCount) {
            $res['ProfileCount'] = $this->profileCount;
        }
        if (null !== $this->catalogId) {
            $res['CatalogId'] = $this->catalogId;
        }
        if (null !== $this->catalogName) {
            $res['CatalogName'] = $this->catalogName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsvSubId'])) {
            $model->isvSubId = $map['IsvSubId'];
        }
        if (isset($map['ParentCatalogId'])) {
            $model->parentCatalogId = $map['ParentCatalogId'];
        }
        if (isset($map['ProfileCount'])) {
            $model->profileCount = $map['ProfileCount'];
        }
        if (isset($map['CatalogId'])) {
            $model->catalogId = $map['CatalogId'];
        }
        if (isset($map['CatalogName'])) {
            $model->catalogName = $map['CatalogName'];
        }

        return $model;
    }
}
