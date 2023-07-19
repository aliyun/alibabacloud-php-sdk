<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeAllWhitelistTemplateRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $fuzzySearch;

    /**
     * @example 10
     *
     * @var int
     */
    public $maxRecordsPerPage;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumbers;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @example template
     *
     * @var string
     */
    public $templateName;
    protected $_name = [
        'fuzzySearch'          => 'FuzzySearch',
        'maxRecordsPerPage'    => 'MaxRecordsPerPage',
        'pageNumbers'          => 'PageNumbers',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'templateName'         => 'TemplateName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fuzzySearch) {
            $res['FuzzySearch'] = $this->fuzzySearch;
        }
        if (null !== $this->maxRecordsPerPage) {
            $res['MaxRecordsPerPage'] = $this->maxRecordsPerPage;
        }
        if (null !== $this->pageNumbers) {
            $res['PageNumbers'] = $this->pageNumbers;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAllWhitelistTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FuzzySearch'])) {
            $model->fuzzySearch = $map['FuzzySearch'];
        }
        if (isset($map['MaxRecordsPerPage'])) {
            $model->maxRecordsPerPage = $map['MaxRecordsPerPage'];
        }
        if (isset($map['PageNumbers'])) {
            $model->pageNumbers = $map['PageNumbers'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        return $model;
    }
}
