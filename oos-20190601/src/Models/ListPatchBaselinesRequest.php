<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListPatchBaselinesRequest\tags;

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
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $operationSystem;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
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
        'approvedPatches' => 'ApprovedPatches',
        'approvedPatchesEnableNonSecurity' => 'ApprovedPatchesEnableNonSecurity',
        'maxResults' => 'MaxResults',
        'name' => 'Name',
        'nextToken' => 'NextToken',
        'operationSystem' => 'OperationSystem',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'shareType' => 'ShareType',
        'sources' => 'Sources',
        'tags' => 'Tags',
    ];

    public function validate()
    {
        if (\is_array($this->approvedPatches)) {
            Model::validateArray($this->approvedPatches);
        }
        if (\is_array($this->sources)) {
            Model::validateArray($this->sources);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->approvedPatches) {
            if (\is_array($this->approvedPatches)) {
                $res['ApprovedPatches'] = [];
                $n1 = 0;
                foreach ($this->approvedPatches as $item1) {
                    $res['ApprovedPatches'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->shareType) {
            $res['ShareType'] = $this->shareType;
        }

        if (null !== $this->sources) {
            if (\is_array($this->sources)) {
                $res['Sources'] = [];
                $n1 = 0;
                foreach ($this->sources as $item1) {
                    $res['Sources'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['ApprovedPatches'])) {
            if (!empty($map['ApprovedPatches'])) {
                $model->approvedPatches = [];
                $n1 = 0;
                foreach ($map['ApprovedPatches'] as $item1) {
                    $model->approvedPatches[$n1] = $item1;
                    ++$n1;
                }
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

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['ShareType'])) {
            $model->shareType = $map['ShareType'];
        }

        if (isset($map['Sources'])) {
            if (!empty($map['Sources'])) {
                $model->sources = [];
                $n1 = 0;
                foreach ($map['Sources'] as $item1) {
                    $model->sources[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
