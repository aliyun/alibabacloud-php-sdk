<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class RecipeSummary extends Model
{
    /**
     * @var string[]
     */
    public $algorithmLabel;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @var string
     */
    public $gmtModifyTime;

    /**
     * @var bool
     */
    public $isDefaultRecipe;

    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $ownerType;

    /**
     * @var string
     */
    public $recipeId;

    /**
     * @var string[]
     */
    public $recipeType;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'algorithmLabel' => 'AlgorithmLabel',
        'creator' => 'Creator',
        'description' => 'Description',
        'gmtCreateTime' => 'GmtCreateTime',
        'gmtModifyTime' => 'GmtModifyTime',
        'isDefaultRecipe' => 'IsDefaultRecipe',
        'model' => 'Model',
        'name' => 'Name',
        'ownerType' => 'OwnerType',
        'recipeId' => 'RecipeId',
        'recipeType' => 'RecipeType',
        'source' => 'Source',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->algorithmLabel)) {
            Model::validateArray($this->algorithmLabel);
        }
        if (\is_array($this->recipeType)) {
            Model::validateArray($this->recipeType);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->algorithmLabel) {
            if (\is_array($this->algorithmLabel)) {
                $res['AlgorithmLabel'] = [];
                $n1 = 0;
                foreach ($this->algorithmLabel as $item1) {
                    $res['AlgorithmLabel'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }

        if (null !== $this->gmtModifyTime) {
            $res['GmtModifyTime'] = $this->gmtModifyTime;
        }

        if (null !== $this->isDefaultRecipe) {
            $res['IsDefaultRecipe'] = $this->isDefaultRecipe;
        }

        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->ownerType) {
            $res['OwnerType'] = $this->ownerType;
        }

        if (null !== $this->recipeId) {
            $res['RecipeId'] = $this->recipeId;
        }

        if (null !== $this->recipeType) {
            if (\is_array($this->recipeType)) {
                $res['RecipeType'] = [];
                $n1 = 0;
                foreach ($this->recipeType as $item1) {
                    $res['RecipeType'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['AlgorithmLabel'])) {
            if (!empty($map['AlgorithmLabel'])) {
                $model->algorithmLabel = [];
                $n1 = 0;
                foreach ($map['AlgorithmLabel'] as $item1) {
                    $model->algorithmLabel[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }

        if (isset($map['GmtModifyTime'])) {
            $model->gmtModifyTime = $map['GmtModifyTime'];
        }

        if (isset($map['IsDefaultRecipe'])) {
            $model->isDefaultRecipe = $map['IsDefaultRecipe'];
        }

        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OwnerType'])) {
            $model->ownerType = $map['OwnerType'];
        }

        if (isset($map['RecipeId'])) {
            $model->recipeId = $map['RecipeId'];
        }

        if (isset($map['RecipeType'])) {
            if (!empty($map['RecipeType'])) {
                $model->recipeType = [];
                $n1 = 0;
                foreach ($map['RecipeType'] as $item1) {
                    $model->recipeType[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
