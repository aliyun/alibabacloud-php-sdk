<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class ListImagesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $accessibility;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $official;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $projectIdsShrink;

    /**
     * @var string
     */
    public $providerTypesShrink;

    /**
     * @var bool
     */
    public $searchAll;

    /**
     * @var string
     */
    public $sortBy;

    /**
     * @var string
     */
    public $stagesShrink;

    /**
     * @var string
     */
    public $statusesShrink;

    /**
     * @var string
     */
    public $supportedModulesShrink;

    /**
     * @var string
     */
    public $supportedTaskTypesShrink;
    protected $_name = [
        'accessibility' => 'Accessibility',
        'name' => 'Name',
        'official' => 'Official',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'projectIdsShrink' => 'ProjectIds',
        'providerTypesShrink' => 'ProviderTypes',
        'searchAll' => 'SearchAll',
        'sortBy' => 'SortBy',
        'stagesShrink' => 'Stages',
        'statusesShrink' => 'Statuses',
        'supportedModulesShrink' => 'SupportedModules',
        'supportedTaskTypesShrink' => 'SupportedTaskTypes',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessibility) {
            $res['Accessibility'] = $this->accessibility;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->official) {
            $res['Official'] = $this->official;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->projectIdsShrink) {
            $res['ProjectIds'] = $this->projectIdsShrink;
        }

        if (null !== $this->providerTypesShrink) {
            $res['ProviderTypes'] = $this->providerTypesShrink;
        }

        if (null !== $this->searchAll) {
            $res['SearchAll'] = $this->searchAll;
        }

        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }

        if (null !== $this->stagesShrink) {
            $res['Stages'] = $this->stagesShrink;
        }

        if (null !== $this->statusesShrink) {
            $res['Statuses'] = $this->statusesShrink;
        }

        if (null !== $this->supportedModulesShrink) {
            $res['SupportedModules'] = $this->supportedModulesShrink;
        }

        if (null !== $this->supportedTaskTypesShrink) {
            $res['SupportedTaskTypes'] = $this->supportedTaskTypesShrink;
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
        if (isset($map['Accessibility'])) {
            $model->accessibility = $map['Accessibility'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Official'])) {
            $model->official = $map['Official'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ProjectIds'])) {
            $model->projectIdsShrink = $map['ProjectIds'];
        }

        if (isset($map['ProviderTypes'])) {
            $model->providerTypesShrink = $map['ProviderTypes'];
        }

        if (isset($map['SearchAll'])) {
            $model->searchAll = $map['SearchAll'];
        }

        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }

        if (isset($map['Stages'])) {
            $model->stagesShrink = $map['Stages'];
        }

        if (isset($map['Statuses'])) {
            $model->statusesShrink = $map['Statuses'];
        }

        if (isset($map['SupportedModules'])) {
            $model->supportedModulesShrink = $map['SupportedModules'];
        }

        if (isset($map['SupportedTaskTypes'])) {
            $model->supportedTaskTypesShrink = $map['SupportedTaskTypes'];
        }

        return $model;
    }
}
