<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\GetCatalogListResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $catalogId;

    /**
     * @var string
     */
    public $catalogName;

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
    protected $_name = [
        'catalogId'       => 'CatalogId',
        'catalogName'     => 'CatalogName',
        'isvSubId'        => 'IsvSubId',
        'parentCatalogId' => 'ParentCatalogId',
        'profileCount'    => 'ProfileCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->catalogId) {
            $res['CatalogId'] = $this->catalogId;
        }
        if (null !== $this->catalogName) {
            $res['CatalogName'] = $this->catalogName;
        }
        if (null !== $this->isvSubId) {
            $res['IsvSubId'] = $this->isvSubId;
        }
        if (null !== $this->parentCatalogId) {
            $res['ParentCatalogId'] = $this->parentCatalogId;
        }
        if (null !== $this->profileCount) {
            $res['ProfileCount'] = $this->profileCount;
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
        if (isset($map['CatalogId'])) {
            $model->catalogId = $map['CatalogId'];
        }
        if (isset($map['CatalogName'])) {
            $model->catalogName = $map['CatalogName'];
        }
        if (isset($map['IsvSubId'])) {
            $model->isvSubId = $map['IsvSubId'];
        }
        if (isset($map['ParentCatalogId'])) {
            $model->parentCatalogId = $map['ParentCatalogId'];
        }
        if (isset($map['ProfileCount'])) {
            $model->profileCount = $map['ProfileCount'];
        }

        return $model;
    }
}
