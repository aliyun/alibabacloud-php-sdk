<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models\ConvertFlowDSLData\conversionPlan;

use AlibabaCloud\Dara\Model;

class issues extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var mixed[]
     */
    public $details;

    /**
     * @var string
     */
    public $issueType;

    /**
     * @var string
     */
    public $level;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $nodeTitle;

    /**
     * @var string
     */
    public $nodeType;

    /**
     * @var string
     */
    public $suggestion;
    protected $_name = [
        'description' => 'description',
        'details' => 'details',
        'issueType' => 'issueType',
        'level' => 'level',
        'nodeId' => 'nodeId',
        'nodeTitle' => 'nodeTitle',
        'nodeType' => 'nodeType',
        'suggestion' => 'suggestion',
    ];

    public function validate()
    {
        if (\is_array($this->details)) {
            Model::validateArray($this->details);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->details) {
            if (\is_array($this->details)) {
                $res['details'] = [];
                foreach ($this->details as $key1 => $value1) {
                    $res['details'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->issueType) {
            $res['issueType'] = $this->issueType;
        }

        if (null !== $this->level) {
            $res['level'] = $this->level;
        }

        if (null !== $this->nodeId) {
            $res['nodeId'] = $this->nodeId;
        }

        if (null !== $this->nodeTitle) {
            $res['nodeTitle'] = $this->nodeTitle;
        }

        if (null !== $this->nodeType) {
            $res['nodeType'] = $this->nodeType;
        }

        if (null !== $this->suggestion) {
            $res['suggestion'] = $this->suggestion;
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
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['details'])) {
            if (!empty($map['details'])) {
                $model->details = [];
                foreach ($map['details'] as $key1 => $value1) {
                    $model->details[$key1] = $value1;
                }
            }
        }

        if (isset($map['issueType'])) {
            $model->issueType = $map['issueType'];
        }

        if (isset($map['level'])) {
            $model->level = $map['level'];
        }

        if (isset($map['nodeId'])) {
            $model->nodeId = $map['nodeId'];
        }

        if (isset($map['nodeTitle'])) {
            $model->nodeTitle = $map['nodeTitle'];
        }

        if (isset($map['nodeType'])) {
            $model->nodeType = $map['nodeType'];
        }

        if (isset($map['suggestion'])) {
            $model->suggestion = $map['suggestion'];
        }

        return $model;
    }
}
