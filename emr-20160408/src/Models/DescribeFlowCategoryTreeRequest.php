<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class DescribeFlowCategoryTreeRequest extends Model
{
    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $keyword;

    /**
     * @var string
     */
    public $categoryId;
    protected $_name = [
        'projectId'  => 'ProjectId',
        'regionId'   => 'RegionId',
        'type'       => 'Type',
        'mode'       => 'Mode',
        'keyword'    => 'Keyword',
        'categoryId' => 'CategoryId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFlowCategoryTreeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }

        return $model;
    }
}
