<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CodeSec\V20260401\Models\DescribeScanResultsByEngineResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CodeSec\V20260401\Models\DescribeScanResultsByEngineResponseBody\items\scaComponent;
use AlibabaCloud\SDK\CodeSec\V20260401\Models\DescribeScanResultsByEngineResponseBody\items\taintFlow;

class items extends Model
{
    /**
     * @var string
     */
    public $baselineState;

    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $codeSnippet;

    /**
     * @var float
     */
    public $confidence;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $cweId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $endLine;

    /**
     * @var string
     */
    public $filePath;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $itemSummary;

    /**
     * @var string
     */
    public $owaspCategory;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $remediationCodeExample;

    /**
     * @var string
     */
    public $remediationSuggestion;

    /**
     * @var string
     */
    public $ruleId;

    /**
     * @var scaComponent
     */
    public $scaComponent;

    /**
     * @var int
     */
    public $scanId;

    /**
     * @var string
     */
    public $severity;

    /**
     * @var string
     */
    public $source;

    /**
     * @var int
     */
    public $startLine;

    /**
     * @var string
     */
    public $status;

    /**
     * @var taintFlow[]
     */
    public $taintFlow;

    /**
     * @var string
     */
    public $taintFlowSummary;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'baselineState' => 'baselineState',
        'category' => 'category',
        'codeSnippet' => 'codeSnippet',
        'confidence' => 'confidence',
        'createdAt' => 'createdAt',
        'cweId' => 'cweId',
        'description' => 'description',
        'endLine' => 'endLine',
        'filePath' => 'filePath',
        'id' => 'id',
        'itemSummary' => 'itemSummary',
        'owaspCategory' => 'owaspCategory',
        'projectName' => 'projectName',
        'remediationCodeExample' => 'remediationCodeExample',
        'remediationSuggestion' => 'remediationSuggestion',
        'ruleId' => 'ruleId',
        'scaComponent' => 'scaComponent',
        'scanId' => 'scanId',
        'severity' => 'severity',
        'source' => 'source',
        'startLine' => 'startLine',
        'status' => 'status',
        'taintFlow' => 'taintFlow',
        'taintFlowSummary' => 'taintFlowSummary',
        'title' => 'title',
    ];

    public function validate()
    {
        if (null !== $this->scaComponent) {
            $this->scaComponent->validate();
        }
        if (\is_array($this->taintFlow)) {
            Model::validateArray($this->taintFlow);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->baselineState) {
            $res['baselineState'] = $this->baselineState;
        }

        if (null !== $this->category) {
            $res['category'] = $this->category;
        }

        if (null !== $this->codeSnippet) {
            $res['codeSnippet'] = $this->codeSnippet;
        }

        if (null !== $this->confidence) {
            $res['confidence'] = $this->confidence;
        }

        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->cweId) {
            $res['cweId'] = $this->cweId;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->endLine) {
            $res['endLine'] = $this->endLine;
        }

        if (null !== $this->filePath) {
            $res['filePath'] = $this->filePath;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->itemSummary) {
            $res['itemSummary'] = $this->itemSummary;
        }

        if (null !== $this->owaspCategory) {
            $res['owaspCategory'] = $this->owaspCategory;
        }

        if (null !== $this->projectName) {
            $res['projectName'] = $this->projectName;
        }

        if (null !== $this->remediationCodeExample) {
            $res['remediationCodeExample'] = $this->remediationCodeExample;
        }

        if (null !== $this->remediationSuggestion) {
            $res['remediationSuggestion'] = $this->remediationSuggestion;
        }

        if (null !== $this->ruleId) {
            $res['ruleId'] = $this->ruleId;
        }

        if (null !== $this->scaComponent) {
            $res['scaComponent'] = null !== $this->scaComponent ? $this->scaComponent->toArray($noStream) : $this->scaComponent;
        }

        if (null !== $this->scanId) {
            $res['scanId'] = $this->scanId;
        }

        if (null !== $this->severity) {
            $res['severity'] = $this->severity;
        }

        if (null !== $this->source) {
            $res['source'] = $this->source;
        }

        if (null !== $this->startLine) {
            $res['startLine'] = $this->startLine;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->taintFlow) {
            if (\is_array($this->taintFlow)) {
                $res['taintFlow'] = [];
                $n1 = 0;
                foreach ($this->taintFlow as $item1) {
                    $res['taintFlow'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->taintFlowSummary) {
            $res['taintFlowSummary'] = $this->taintFlowSummary;
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
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
        if (isset($map['baselineState'])) {
            $model->baselineState = $map['baselineState'];
        }

        if (isset($map['category'])) {
            $model->category = $map['category'];
        }

        if (isset($map['codeSnippet'])) {
            $model->codeSnippet = $map['codeSnippet'];
        }

        if (isset($map['confidence'])) {
            $model->confidence = $map['confidence'];
        }

        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['cweId'])) {
            $model->cweId = $map['cweId'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['endLine'])) {
            $model->endLine = $map['endLine'];
        }

        if (isset($map['filePath'])) {
            $model->filePath = $map['filePath'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['itemSummary'])) {
            $model->itemSummary = $map['itemSummary'];
        }

        if (isset($map['owaspCategory'])) {
            $model->owaspCategory = $map['owaspCategory'];
        }

        if (isset($map['projectName'])) {
            $model->projectName = $map['projectName'];
        }

        if (isset($map['remediationCodeExample'])) {
            $model->remediationCodeExample = $map['remediationCodeExample'];
        }

        if (isset($map['remediationSuggestion'])) {
            $model->remediationSuggestion = $map['remediationSuggestion'];
        }

        if (isset($map['ruleId'])) {
            $model->ruleId = $map['ruleId'];
        }

        if (isset($map['scaComponent'])) {
            $model->scaComponent = scaComponent::fromMap($map['scaComponent']);
        }

        if (isset($map['scanId'])) {
            $model->scanId = $map['scanId'];
        }

        if (isset($map['severity'])) {
            $model->severity = $map['severity'];
        }

        if (isset($map['source'])) {
            $model->source = $map['source'];
        }

        if (isset($map['startLine'])) {
            $model->startLine = $map['startLine'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['taintFlow'])) {
            if (!empty($map['taintFlow'])) {
                $model->taintFlow = [];
                $n1 = 0;
                foreach ($map['taintFlow'] as $item1) {
                    $model->taintFlow[$n1] = taintFlow::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['taintFlowSummary'])) {
            $model->taintFlowSummary = $map['taintFlowSummary'];
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}
