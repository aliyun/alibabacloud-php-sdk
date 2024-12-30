<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetDirectoryTreeResponseBody\data;

use AlibabaCloud\Tea\Model;

class children extends Model
{
    /**
     * @example codeManage
     *
     * @var string
     */
    public $categoryType;

    /**
     * @example 300000907
     *
     * @var string
     */
    public $creator;

    /**
     * @example John
     *
     * @var string
     */
    public $creatorName;

    /**
     * @example 41342
     *
     * @var int
     */
    public $dataCellId;

    /**
     * @example /
     *
     * @var string
     */
    public $dirName;

    /**
     * @example 2024-11-01 18:08:17
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2024-11-01 18:08:17
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example 3
     *
     * @var int
     */
    public $id;

    /**
     * @example 300000907
     *
     * @var string
     */
    public $lastModifier;

    /**
     * @example John
     *
     * @var string
     */
    public $lastModifierName;

    /**
     * @example 代码管理
     *
     * @var string
     */
    public $name;

    /**
     * @example 7081229106458752
     *
     * @var int
     */
    public $projectId;

    /**
     * @example 3
     *
     * @var string
     */
    public $stringId;

    /**
     * @example codeManage
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'categoryType'     => 'CategoryType',
        'creator'          => 'Creator',
        'creatorName'      => 'CreatorName',
        'dataCellId'       => 'DataCellId',
        'dirName'          => 'DirName',
        'gmtCreate'        => 'GmtCreate',
        'gmtModified'      => 'GmtModified',
        'id'               => 'Id',
        'lastModifier'     => 'LastModifier',
        'lastModifierName' => 'LastModifierName',
        'name'             => 'Name',
        'projectId'        => 'ProjectId',
        'stringId'         => 'StringId',
        'type'             => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->categoryType) {
            $res['CategoryType'] = $this->categoryType;
        }
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->creatorName) {
            $res['CreatorName'] = $this->creatorName;
        }
        if (null !== $this->dataCellId) {
            $res['DataCellId'] = $this->dataCellId;
        }
        if (null !== $this->dirName) {
            $res['DirName'] = $this->dirName;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->lastModifier) {
            $res['LastModifier'] = $this->lastModifier;
        }
        if (null !== $this->lastModifierName) {
            $res['LastModifierName'] = $this->lastModifierName;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->stringId) {
            $res['StringId'] = $this->stringId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return children
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CategoryType'])) {
            $model->categoryType = $map['CategoryType'];
        }
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['CreatorName'])) {
            $model->creatorName = $map['CreatorName'];
        }
        if (isset($map['DataCellId'])) {
            $model->dataCellId = $map['DataCellId'];
        }
        if (isset($map['DirName'])) {
            $model->dirName = $map['DirName'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['LastModifier'])) {
            $model->lastModifier = $map['LastModifier'];
        }
        if (isset($map['LastModifierName'])) {
            $model->lastModifierName = $map['LastModifierName'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['StringId'])) {
            $model->stringId = $map['StringId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
