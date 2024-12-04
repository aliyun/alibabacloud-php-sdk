<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20210202\Models\ListNodeOutputsResponseBody;

use AlibabaCloud\Tea\Model;

class outputs extends Model
{
    /**
     * @var string
     */
    public $algoName;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @example MaxComputeTable
     *
     * @var string
     */
    public $locationType;

    /**
     * @example node1
     *
     * @var string
     */
    public $nodeName;

    /**
     * @example outputModel
     *
     * @var string
     */
    public $outputId;

    /**
     * @example 0
     *
     * @var string
     */
    public $outputIndex;

    /**
     * @example Model
     *
     * @var string
     */
    public $type;

    /**
     * @example {
     * }
     * @var mixed[]
     */
    public $value;
    protected $_name = [
        'algoName'     => 'AlgoName',
        'displayName'  => 'DisplayName',
        'locationType' => 'LocationType',
        'nodeName'     => 'NodeName',
        'outputId'     => 'OutputId',
        'outputIndex'  => 'OutputIndex',
        'type'         => 'Type',
        'value'        => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->algoName) {
            $res['AlgoName'] = $this->algoName;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->locationType) {
            $res['LocationType'] = $this->locationType;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->outputId) {
            $res['OutputId'] = $this->outputId;
        }
        if (null !== $this->outputIndex) {
            $res['OutputIndex'] = $this->outputIndex;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return outputs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlgoName'])) {
            $model->algoName = $map['AlgoName'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['LocationType'])) {
            $model->locationType = $map['LocationType'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['OutputId'])) {
            $model->outputId = $map['OutputId'];
        }
        if (isset($map['OutputIndex'])) {
            $model->outputIndex = $map['OutputIndex'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
