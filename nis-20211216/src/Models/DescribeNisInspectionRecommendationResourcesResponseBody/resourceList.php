<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models\DescribeNisInspectionRecommendationResourcesResponseBody;

use AlibabaCloud\Tea\Model;

class resourceList extends Model
{
    /**
     * @example {ResourceId: "ngw-p0wn04hi4****q2us6q7q"}
     *
     * @var string
     */
    public $analysisData;

    /**
     * @example ngw-p0wn04hi4****q2us6q7q
     *
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $resourceName;
    protected $_name = [
        'analysisData' => 'AnalysisData',
        'resourceId'   => 'ResourceId',
        'resourceName' => 'ResourceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->analysisData) {
            $res['AnalysisData'] = $this->analysisData;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AnalysisData'])) {
            $model->analysisData = $map['AnalysisData'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }

        return $model;
    }
}
