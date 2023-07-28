<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\SDK\Oos\V20190601\Models\ListPatchBaselinesRequest\tags;
use AlibabaCloud\Tea\Model;

class ListPatchBaselinesRequest extends Model
{
    /**
     * @var string[]
     */
    public $approvedPatches;

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
     * @description The token that is used to retrieve the next page of results.
     *
     * @example Private
     *
     * @var string
     */
    public $shareType;

    /**
     * @var string[]
     */
    public $sources;

    /**
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'approvedPatches'                  => 'ApprovedPatches',
        'approvedPatchesEnableNonSecurity' => 'ApprovedPatchesEnableNonSecurity',
        'maxResults'                       => 'MaxResults',
        'name'                             => 'Name',
        'nextToken'                        => 'NextToken',
        'operationSystem'                  => 'OperationSystem',
        'regionId'                         => 'RegionId',
        'shareType'                        => 'ShareType',
        'sources'                          => 'Sources',
        'tags'                             => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->approvedPatches) {
            $res['ApprovedPatches'] = $this->approvedPatches;
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
        if (null !== $this->shareType) {
            $res['ShareType'] = $this->shareType;
        }
        if (null !== $this->sources) {
            $res['Sources'] = $this->sources;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPatchBaselinesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApprovedPatches'])) {
            if (!empty($map['ApprovedPatches'])) {
                $model->approvedPatches = $map['ApprovedPatches'];
            }
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
        if (isset($map['ShareType'])) {
            $model->shareType = $map['ShareType'];
        }
        if (isset($map['Sources'])) {
            if (!empty($map['Sources'])) {
                $model->sources = $map['Sources'];
            }
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
