<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\ListTemplateScratchesRequest\tags;
use AlibabaCloud\Tea\Model;

class ListTemplateScratchesRequest extends Model
{
    /**
     * @description The number of the page to return.
     *
     * Default value: 1.
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page.
     *
     * Default value: 10.
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the region in which the scenario is created.
     *
     * You can call the [DescribeRegions](~~131035~~) operation to query the most recent region list.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The state of the scenario. Valid values:
     *
     *   GENERATE_IN_PROGRESS: The scenario is being created.
     *   GENERATE_COMPLETE: The scenario is created.
     *   GENERATE_FAILED: The scenario fails to be created.
     *
     * @example ["GENERATE_COMPLETE"]
     *
     * @var string
     */
    public $status;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @description The ID of the scenario.
     *
     * @example ts-7f7a704cf71c49a6****
     *
     * @var string
     */
    public $templateScratchId;

    /**
     * @description The type of the scenario. Valid values:
     *
     *   ResourceImport: resource management
     *   ArchitectureReplication: resource replication
     *
     * @example ArchitectureReplication
     *
     * @var string
     */
    public $templateScratchType;
    protected $_name = [
        'pageNumber'          => 'PageNumber',
        'pageSize'            => 'PageSize',
        'regionId'            => 'RegionId',
        'status'              => 'Status',
        'tags'                => 'Tags',
        'templateScratchId'   => 'TemplateScratchId',
        'templateScratchType' => 'TemplateScratchType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (null !== $this->templateScratchId) {
            $res['TemplateScratchId'] = $this->templateScratchId;
        }
        if (null !== $this->templateScratchType) {
            $res['TemplateScratchType'] = $this->templateScratchType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTemplateScratchesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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
        if (isset($map['TemplateScratchId'])) {
            $model->templateScratchId = $map['TemplateScratchId'];
        }
        if (isset($map['TemplateScratchType'])) {
            $model->templateScratchType = $map['TemplateScratchType'];
        }

        return $model;
    }
}
