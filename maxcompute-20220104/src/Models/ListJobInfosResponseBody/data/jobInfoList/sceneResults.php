<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListJobInfosResponseBody\data\jobInfoList;

use AlibabaCloud\Tea\Model;

class sceneResults extends Model
{
    /**
     * @description The intelligent diagnostics result description.
     *
     * @example This job uses annual and monthly computing resources. It may be that the job is waiting for resources due to the large amount of overall job running data, many resources requested, and low job priority. Please go to Resource Consumption to view the specific situation. You can also go to Cost Optimization to see if you need to adjust resource configuration.
     *
     * @var string
     */
    public $description;

    /**
     * @description Information about the nodes where data skew or data expansion is detected. This parameter is returned only when the diagnostics scenario is data skew or data expansion.
     *
     * @var string[]
     */
    public $params;

    /**
     * @description The intelligent diagnostics result scenario.
     *
     * @example LackResource
     *
     * @var string
     */
    public $scene;

    /**
     * @description The intelligent diagnostics result tag.
     *
     * @example SubscriptionLackResource
     *
     * @var string
     */
    public $sceneTag;

    /**
     * @description The intelligent diagnostics result summary.
     *
     * @example Insufficient computing resources available for the job. Click to view details.
     *
     * @var string
     */
    public $summary;

    /**
     * @description The intelligent diagnostics result type.
     *
     * @example warning
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'description' => 'description',
        'params' => 'params',
        'scene' => 'scene',
        'sceneTag' => 'sceneTag',
        'summary' => 'summary',
        'type' => 'type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->params) {
            $res['params'] = $this->params;
        }
        if (null !== $this->scene) {
            $res['scene'] = $this->scene;
        }
        if (null !== $this->sceneTag) {
            $res['sceneTag'] = $this->sceneTag;
        }
        if (null !== $this->summary) {
            $res['summary'] = $this->summary;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sceneResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['params'])) {
            $model->params = $map['params'];
        }
        if (isset($map['scene'])) {
            $model->scene = $map['scene'];
        }
        if (isset($map['sceneTag'])) {
            $model->sceneTag = $map['sceneTag'];
        }
        if (isset($map['summary'])) {
            $model->summary = $map['summary'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
