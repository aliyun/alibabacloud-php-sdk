<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Tea\Model;

class ListPatchBaselinesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $approvedPatchesShrink;

    /**
     * @var bool
     */
    public $approvedPatchesEnableNonSecurity;

    /**
     * @description The token that is used to retrieve the next page of results.
     *
     * @example 50
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The share type of the patch baseline.
     *
     * @example MyPatchBaseline
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the request.
     *
     * @example -
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The number of entries to return on each page.
     *
     * @example AliyunLinux
     *
     * @var string
     */
    public $operationSystem;

    /**
     * @description The type of the operating system. Valid values:
     *
     *   AliyunLinux
     *   Windows
     *   Ubuntu
     *   Centos
     *   Debian
     *   RedhatEnterpriseLinux
     *   Anolis
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupld;

    /**
     * @description The token that is used to retrieve the next page of results.
     *
     * @example Private
     *
     * @var string
     */
    public $shareType;

    /**
     * @var string
     */
    public $sourcesShrink;

    /**
     * @var string
     */
    public $tagsShrink;
    protected $_name = [
        'approvedPatchesShrink'            => 'ApprovedPatches',
        'approvedPatchesEnableNonSecurity' => 'ApprovedPatchesEnableNonSecurity',
        'maxResults'                       => 'MaxResults',
        'name'                             => 'Name',
        'nextToken'                        => 'NextToken',
        'operationSystem'                  => 'OperationSystem',
        'regionId'                         => 'RegionId',
        'resourceGroupld'                  => 'ResourceGroupld',
        'shareType'                        => 'ShareType',
        'sourcesShrink'                    => 'Sources',
        'tagsShrink'                       => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->approvedPatchesShrink) {
            $res['ApprovedPatches'] = $this->approvedPatchesShrink;
        }
        if (null !== $this->approvedPatchesEnableNonSecurity) {
            $res['ApprovedPatchesEnableNonSecurity'] = $this->approvedPatchesEnableNonSecurity;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->operationSystem) {
            $res['OperationSystem'] = $this->operationSystem;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupld) {
            $res['ResourceGroupld'] = $this->resourceGroupld;
        }
        if (null !== $this->shareType) {
            $res['ShareType'] = $this->shareType;
        }
        if (null !== $this->sourcesShrink) {
            $res['Sources'] = $this->sourcesShrink;
        }
        if (null !== $this->tagsShrink) {
            $res['Tags'] = $this->tagsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPatchBaselinesShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApprovedPatches'])) {
            $model->approvedPatchesShrink = $map['ApprovedPatches'];
        }
        if (isset($map['ApprovedPatchesEnableNonSecurity'])) {
            $model->approvedPatchesEnableNonSecurity = $map['ApprovedPatchesEnableNonSecurity'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['OperationSystem'])) {
            $model->operationSystem = $map['OperationSystem'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupld'])) {
            $model->resourceGroupld = $map['ResourceGroupld'];
        }
        if (isset($map['ShareType'])) {
            $model->shareType = $map['ShareType'];
        }
        if (isset($map['Sources'])) {
            $model->sourcesShrink = $map['Sources'];
        }
        if (isset($map['Tags'])) {
            $model->tagsShrink = $map['Tags'];
        }

        return $model;
    }
}
