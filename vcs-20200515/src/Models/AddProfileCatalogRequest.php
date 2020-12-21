<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models;

use AlibabaCloud\Tea\Model;

class AddProfileCatalogRequest extends Model
{
    /**
     * @var string
     */
    public $corpId;

    /**
     * @var string
     */
    public $isvSubId;

    /**
     * @var string
     */
    public $catalogName;

    /**
     * @var int
     */
    public $parentCatalogId;
    protected $_name = [
        'corpId'          => 'CorpId',
        'isvSubId'        => 'IsvSubId',
        'catalogName'     => 'CatalogName',
        'parentCatalogId' => 'ParentCatalogId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }
        if (null !== $this->isvSubId) {
            $res['IsvSubId'] = $this->isvSubId;
        }
        if (null !== $this->catalogName) {
            $res['CatalogName'] = $this->catalogName;
        }
        if (null !== $this->parentCatalogId) {
            $res['ParentCatalogId'] = $this->parentCatalogId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddProfileCatalogRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['IsvSubId'])) {
            $model->isvSubId = $map['IsvSubId'];
        }
        if (isset($map['CatalogName'])) {
            $model->catalogName = $map['CatalogName'];
        }
        if (isset($map['ParentCatalogId'])) {
            $model->parentCatalogId = $map['ParentCatalogId'];
        }

        return $model;
    }
}
