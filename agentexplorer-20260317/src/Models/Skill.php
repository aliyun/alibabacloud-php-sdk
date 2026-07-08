<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentExplorer\V20260317\Models;

use AlibabaCloud\Dara\Model;

class Skill extends Model
{
    /**
     * @var string
     */
    public $categoryCode;

    /**
     * @var string
     */
    public $categoryName;

    /**
     * @var string
     */
    public $categoryNameEn;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $descriptionEn;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $githubPath;

    /**
     * @var int
     */
    public $installCount;

    /**
     * @var int
     */
    public $likeCount;

    /**
     * @var string
     */
    public $nameEn;

    /**
     * @var string
     */
    public $skillName;

    /**
     * @var string
     */
    public $subCategoryCode;

    /**
     * @var string
     */
    public $subCategoryName;

    /**
     * @var string
     */
    public $subCategoryNameEn;

    /**
     * @var string
     */
    public $updatedAt;
    protected $_name = [
        'categoryCode' => 'categoryCode',
        'categoryName' => 'categoryName',
        'categoryNameEn' => 'categoryNameEn',
        'createdAt' => 'createdAt',
        'description' => 'description',
        'descriptionEn' => 'descriptionEn',
        'displayName' => 'displayName',
        'githubPath' => 'githubPath',
        'installCount' => 'installCount',
        'likeCount' => 'likeCount',
        'nameEn' => 'nameEn',
        'skillName' => 'skillName',
        'subCategoryCode' => 'subCategoryCode',
        'subCategoryName' => 'subCategoryName',
        'subCategoryNameEn' => 'subCategoryNameEn',
        'updatedAt' => 'updatedAt',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->categoryCode) {
            $res['categoryCode'] = $this->categoryCode;
        }

        if (null !== $this->categoryName) {
            $res['categoryName'] = $this->categoryName;
        }

        if (null !== $this->categoryNameEn) {
            $res['categoryNameEn'] = $this->categoryNameEn;
        }

        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->descriptionEn) {
            $res['descriptionEn'] = $this->descriptionEn;
        }

        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }

        if (null !== $this->githubPath) {
            $res['githubPath'] = $this->githubPath;
        }

        if (null !== $this->installCount) {
            $res['installCount'] = $this->installCount;
        }

        if (null !== $this->likeCount) {
            $res['likeCount'] = $this->likeCount;
        }

        if (null !== $this->nameEn) {
            $res['nameEn'] = $this->nameEn;
        }

        if (null !== $this->skillName) {
            $res['skillName'] = $this->skillName;
        }

        if (null !== $this->subCategoryCode) {
            $res['subCategoryCode'] = $this->subCategoryCode;
        }

        if (null !== $this->subCategoryName) {
            $res['subCategoryName'] = $this->subCategoryName;
        }

        if (null !== $this->subCategoryNameEn) {
            $res['subCategoryNameEn'] = $this->subCategoryNameEn;
        }

        if (null !== $this->updatedAt) {
            $res['updatedAt'] = $this->updatedAt;
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
        if (isset($map['categoryCode'])) {
            $model->categoryCode = $map['categoryCode'];
        }

        if (isset($map['categoryName'])) {
            $model->categoryName = $map['categoryName'];
        }

        if (isset($map['categoryNameEn'])) {
            $model->categoryNameEn = $map['categoryNameEn'];
        }

        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['descriptionEn'])) {
            $model->descriptionEn = $map['descriptionEn'];
        }

        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }

        if (isset($map['githubPath'])) {
            $model->githubPath = $map['githubPath'];
        }

        if (isset($map['installCount'])) {
            $model->installCount = $map['installCount'];
        }

        if (isset($map['likeCount'])) {
            $model->likeCount = $map['likeCount'];
        }

        if (isset($map['nameEn'])) {
            $model->nameEn = $map['nameEn'];
        }

        if (isset($map['skillName'])) {
            $model->skillName = $map['skillName'];
        }

        if (isset($map['subCategoryCode'])) {
            $model->subCategoryCode = $map['subCategoryCode'];
        }

        if (isset($map['subCategoryName'])) {
            $model->subCategoryName = $map['subCategoryName'];
        }

        if (isset($map['subCategoryNameEn'])) {
            $model->subCategoryNameEn = $map['subCategoryNameEn'];
        }

        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }

        return $model;
    }
}
