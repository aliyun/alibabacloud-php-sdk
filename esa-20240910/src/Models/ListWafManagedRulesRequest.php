<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListWafManagedRulesRequest\queryArgs;

class ListWafManagedRulesRequest extends Model
{
    /**
     * @var int
     */
    public $attackType;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $language;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $protectionLevel;

    /**
     * @var queryArgs
     */
    public $queryArgs;

    /**
     * @var int
     */
    public $siteId;
    protected $_name = [
        'attackType' => 'AttackType',
        'id' => 'Id',
        'language' => 'Language',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'protectionLevel' => 'ProtectionLevel',
        'queryArgs' => 'QueryArgs',
        'siteId' => 'SiteId',
    ];

    public function validate()
    {
        if (null !== $this->queryArgs) {
            $this->queryArgs->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attackType) {
            $res['AttackType'] = $this->attackType;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->protectionLevel) {
            $res['ProtectionLevel'] = $this->protectionLevel;
        }

        if (null !== $this->queryArgs) {
            $res['QueryArgs'] = null !== $this->queryArgs ? $this->queryArgs->toArray($noStream) : $this->queryArgs;
        }

        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
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
        if (isset($map['AttackType'])) {
            $model->attackType = $map['AttackType'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ProtectionLevel'])) {
            $model->protectionLevel = $map['ProtectionLevel'];
        }

        if (isset($map['QueryArgs'])) {
            $model->queryArgs = queryArgs::fromMap($map['QueryArgs']);
        }

        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        return $model;
    }
}
