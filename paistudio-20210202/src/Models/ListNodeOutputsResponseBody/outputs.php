<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20210202\Models\ListNodeOutputsResponseBody;

use AlibabaCloud\Dara\Model;

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
     * @var string
     */
    public $locationType;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var string
     */
    public $outputId;

    /**
     * @var string
     */
    public $outputIndex;

    /**
     * @var string
     */
    public $type;

    /**
     * @var mixed[]
     */
    public $value;
    protected $_name = [
        'algoName' => 'AlgoName',
        'displayName' => 'DisplayName',
        'locationType' => 'LocationType',
        'nodeName' => 'NodeName',
        'outputId' => 'OutputId',
        'outputIndex' => 'OutputIndex',
        'type' => 'Type',
        'value' => 'Value',
    ];

    public function validate()
    {
        if (\is_array($this->value)) {
            Model::validateArray($this->value);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->value)) {
                $res['Value'] = [];
                foreach ($this->value as $key1 => $value1) {
                    $res['Value'][$key1] = $value1;
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
            if (!empty($map['Value'])) {
                $model->value = [];
                foreach ($map['Value'] as $key1 => $value1) {
                    $model->value[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
