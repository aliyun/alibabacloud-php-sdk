<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class ListApplicationsRequest extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $appSource;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $fieldType;

    /**
     * @var string
     */
    public $fieldValue;

    /**
     * @var string
     */
    public $isStateful;

    /**
     * @var string
     */
    public $namespaceId;

    /**
     * @var string
     */
    public $orderBy;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var bool
     */
    public $reverse;

    /**
     * @var string
     */
    public $tags;
    protected $_name = [
        'appName' => 'AppName',
        'appSource' => 'AppSource',
        'currentPage' => 'CurrentPage',
        'fieldType' => 'FieldType',
        'fieldValue' => 'FieldValue',
        'isStateful' => 'IsStateful',
        'namespaceId' => 'NamespaceId',
        'orderBy' => 'OrderBy',
        'pageSize' => 'PageSize',
        'reverse' => 'Reverse',
        'tags' => 'Tags',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->appSource) {
            $res['AppSource'] = $this->appSource;
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->fieldType) {
            $res['FieldType'] = $this->fieldType;
        }

        if (null !== $this->fieldValue) {
            $res['FieldValue'] = $this->fieldValue;
        }

        if (null !== $this->isStateful) {
            $res['IsStateful'] = $this->isStateful;
        }

        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }

        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->reverse) {
            $res['Reverse'] = $this->reverse;
        }

        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
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
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['AppSource'])) {
            $model->appSource = $map['AppSource'];
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['FieldType'])) {
            $model->fieldType = $map['FieldType'];
        }

        if (isset($map['FieldValue'])) {
            $model->fieldValue = $map['FieldValue'];
        }

        if (isset($map['IsStateful'])) {
            $model->isStateful = $map['IsStateful'];
        }

        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }

        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['Reverse'])) {
            $model->reverse = $map['Reverse'];
        }

        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }

        return $model;
    }
}
