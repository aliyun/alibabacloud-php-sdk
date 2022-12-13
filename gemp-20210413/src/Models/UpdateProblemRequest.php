<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class UpdateProblemRequest extends Model
{
    /**
     * @var string
     */
    public $feedback;

    /**
     * @example P1
     *
     * @var string
     */
    public $level;

    /**
     * @example 678
     *
     * @var int
     */
    public $mainHandlerId;

    /**
     * @var string
     */
    public $preliminaryReason;

    /**
     * @example 213432
     *
     * @var int
     */
    public $problemId;

    /**
     * @var string
     */
    public $problemName;

    /**
     * @var string
     */
    public $progressSummary;

    /**
     * @example 23232
     *
     * @var int
     */
    public $progressSummaryRichTextId;

    /**
     * @example 123
     *
     * @var int
     */
    public $relatedServiceId;

    /**
     * @var int[]
     */
    public $serviceGroupIds;
    protected $_name = [
        'feedback'                  => 'feedback',
        'level'                     => 'level',
        'mainHandlerId'             => 'mainHandlerId',
        'preliminaryReason'         => 'preliminaryReason',
        'problemId'                 => 'problemId',
        'problemName'               => 'problemName',
        'progressSummary'           => 'progressSummary',
        'progressSummaryRichTextId' => 'progressSummaryRichTextId',
        'relatedServiceId'          => 'relatedServiceId',
        'serviceGroupIds'           => 'serviceGroupIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->feedback) {
            $res['feedback'] = $this->feedback;
        }
        if (null !== $this->level) {
            $res['level'] = $this->level;
        }
        if (null !== $this->mainHandlerId) {
            $res['mainHandlerId'] = $this->mainHandlerId;
        }
        if (null !== $this->preliminaryReason) {
            $res['preliminaryReason'] = $this->preliminaryReason;
        }
        if (null !== $this->problemId) {
            $res['problemId'] = $this->problemId;
        }
        if (null !== $this->problemName) {
            $res['problemName'] = $this->problemName;
        }
        if (null !== $this->progressSummary) {
            $res['progressSummary'] = $this->progressSummary;
        }
        if (null !== $this->progressSummaryRichTextId) {
            $res['progressSummaryRichTextId'] = $this->progressSummaryRichTextId;
        }
        if (null !== $this->relatedServiceId) {
            $res['relatedServiceId'] = $this->relatedServiceId;
        }
        if (null !== $this->serviceGroupIds) {
            $res['serviceGroupIds'] = $this->serviceGroupIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateProblemRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['feedback'])) {
            $model->feedback = $map['feedback'];
        }
        if (isset($map['level'])) {
            $model->level = $map['level'];
        }
        if (isset($map['mainHandlerId'])) {
            $model->mainHandlerId = $map['mainHandlerId'];
        }
        if (isset($map['preliminaryReason'])) {
            $model->preliminaryReason = $map['preliminaryReason'];
        }
        if (isset($map['problemId'])) {
            $model->problemId = $map['problemId'];
        }
        if (isset($map['problemName'])) {
            $model->problemName = $map['problemName'];
        }
        if (isset($map['progressSummary'])) {
            $model->progressSummary = $map['progressSummary'];
        }
        if (isset($map['progressSummaryRichTextId'])) {
            $model->progressSummaryRichTextId = $map['progressSummaryRichTextId'];
        }
        if (isset($map['relatedServiceId'])) {
            $model->relatedServiceId = $map['relatedServiceId'];
        }
        if (isset($map['serviceGroupIds'])) {
            if (!empty($map['serviceGroupIds'])) {
                $model->serviceGroupIds = $map['serviceGroupIds'];
            }
        }

        return $model;
    }
}
