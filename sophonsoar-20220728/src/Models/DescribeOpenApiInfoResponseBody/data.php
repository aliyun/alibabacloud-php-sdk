<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeOpenApiInfoResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example describeEcs
     *
     * @var string
     */
    public $description;

    /**
     * @example {}
     *
     * @var string
     */
    public $inputParams;

    /**
     * @example []
     *
     * @var string
     */
    public $outputParams;

    /**
     * @example []
     *
     * @var string
     */
    public $responseDemo;

    /**
     * @example describeEcs
     *
     * @var string
     */
    public $summary;

    /**
     * @example describeEcs
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'description' => 'Description',
        'inputParams' => 'InputParams',
        'outputParams' => 'OutputParams',
        'responseDemo' => 'ResponseDemo',
        'summary' => 'Summary',
        'title' => 'Title',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->inputParams) {
            $res['InputParams'] = $this->inputParams;
        }
        if (null !== $this->outputParams) {
            $res['OutputParams'] = $this->outputParams;
        }
        if (null !== $this->responseDemo) {
            $res['ResponseDemo'] = $this->responseDemo;
        }
        if (null !== $this->summary) {
            $res['Summary'] = $this->summary;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['InputParams'])) {
            $model->inputParams = $map['InputParams'];
        }
        if (isset($map['OutputParams'])) {
            $model->outputParams = $map['OutputParams'];
        }
        if (isset($map['ResponseDemo'])) {
            $model->responseDemo = $map['ResponseDemo'];
        }
        if (isset($map['Summary'])) {
            $model->summary = $map['Summary'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
