<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\ListSummariesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListSummariesResponseBody\regionSummaries\stackDetails;

class regionSummaries extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $stackCount;

    /**
     * @var stackDetails[]
     */
    public $stackDetails;

    /**
     * @var string
     */
    public $stackGroupCount;

    /**
     * @var int
     */
    public $templateScratchCount;
    protected $_name = [
        'regionId' => 'RegionId',
        'stackCount' => 'StackCount',
        'stackDetails' => 'StackDetails',
        'stackGroupCount' => 'StackGroupCount',
        'templateScratchCount' => 'TemplateScratchCount',
    ];

    public function validate()
    {
        if (\is_array($this->stackDetails)) {
            Model::validateArray($this->stackDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->stackCount) {
            $res['StackCount'] = $this->stackCount;
        }

        if (null !== $this->stackDetails) {
            if (\is_array($this->stackDetails)) {
                $res['StackDetails'] = [];
                $n1 = 0;
                foreach ($this->stackDetails as $item1) {
                    $res['StackDetails'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->stackGroupCount) {
            $res['StackGroupCount'] = $this->stackGroupCount;
        }

        if (null !== $this->templateScratchCount) {
            $res['TemplateScratchCount'] = $this->templateScratchCount;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['StackCount'])) {
            $model->stackCount = $map['StackCount'];
        }

        if (isset($map['StackDetails'])) {
            if (!empty($map['StackDetails'])) {
                $model->stackDetails = [];
                $n1 = 0;
                foreach ($map['StackDetails'] as $item1) {
                    $model->stackDetails[$n1] = stackDetails::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['StackGroupCount'])) {
            $model->stackGroupCount = $map['StackGroupCount'];
        }

        if (isset($map['TemplateScratchCount'])) {
            $model->templateScratchCount = $map['TemplateScratchCount'];
        }

        return $model;
    }
}
