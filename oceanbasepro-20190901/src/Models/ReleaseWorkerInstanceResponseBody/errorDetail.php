<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ReleaseWorkerInstanceResponseBody;

use AlibabaCloud\Tea\Model;

class errorDetail extends Model
{
    /**
     * @example CM-RESOAT1111
     *
     * @var string
     */
    public $code;

    /**
     * @var mixed[]
     */
    public $extraContext;

    /**
     * @example ERROR
     *
     * @var string
     */
    public $level;

    /**
     * @example A system error occurred.
     *
     * @var string
     */
    public $message;

    /**
     * @var string[]
     */
    public $messageMcmsContext;

    /**
     * @example null
     *
     * @var string
     */
    public $messageMcmsKey;

    /**
     * @example Contact the administrator.
     *
     * @var string
     */
    public $proposal;

    /**
     * @var string[]
     */
    public $proposalMcmsContext;

    /**
     * @example null
     *
     * @var string
     */
    public $proposalMcmsKey;

    /**
     * @example null
     *
     * @var string
     */
    public $reason;

    /**
     * @var string[]
     */
    public $reasonMcmsContext;

    /**
     * @example null
     *
     * @var string
     */
    public $reasonMcmsKey;

    /**
     * @example null
     *
     * @var mixed
     */
    public $upstreamErrorDetail;
    protected $_name = [
        'code'                => 'Code',
        'extraContext'        => 'ExtraContext',
        'level'               => 'Level',
        'message'             => 'Message',
        'messageMcmsContext'  => 'MessageMcmsContext',
        'messageMcmsKey'      => 'MessageMcmsKey',
        'proposal'            => 'Proposal',
        'proposalMcmsContext' => 'ProposalMcmsContext',
        'proposalMcmsKey'     => 'ProposalMcmsKey',
        'reason'              => 'Reason',
        'reasonMcmsContext'   => 'ReasonMcmsContext',
        'reasonMcmsKey'       => 'ReasonMcmsKey',
        'upstreamErrorDetail' => 'UpstreamErrorDetail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->extraContext) {
            $res['ExtraContext'] = $this->extraContext;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->messageMcmsContext) {
            $res['MessageMcmsContext'] = $this->messageMcmsContext;
        }
        if (null !== $this->messageMcmsKey) {
            $res['MessageMcmsKey'] = $this->messageMcmsKey;
        }
        if (null !== $this->proposal) {
            $res['Proposal'] = $this->proposal;
        }
        if (null !== $this->proposalMcmsContext) {
            $res['ProposalMcmsContext'] = $this->proposalMcmsContext;
        }
        if (null !== $this->proposalMcmsKey) {
            $res['ProposalMcmsKey'] = $this->proposalMcmsKey;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->reasonMcmsContext) {
            $res['ReasonMcmsContext'] = $this->reasonMcmsContext;
        }
        if (null !== $this->reasonMcmsKey) {
            $res['ReasonMcmsKey'] = $this->reasonMcmsKey;
        }
        if (null !== $this->upstreamErrorDetail) {
            $res['UpstreamErrorDetail'] = $this->upstreamErrorDetail;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return errorDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['ExtraContext'])) {
            $model->extraContext = $map['ExtraContext'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['MessageMcmsContext'])) {
            $model->messageMcmsContext = $map['MessageMcmsContext'];
        }
        if (isset($map['MessageMcmsKey'])) {
            $model->messageMcmsKey = $map['MessageMcmsKey'];
        }
        if (isset($map['Proposal'])) {
            $model->proposal = $map['Proposal'];
        }
        if (isset($map['ProposalMcmsContext'])) {
            $model->proposalMcmsContext = $map['ProposalMcmsContext'];
        }
        if (isset($map['ProposalMcmsKey'])) {
            $model->proposalMcmsKey = $map['ProposalMcmsKey'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['ReasonMcmsContext'])) {
            $model->reasonMcmsContext = $map['ReasonMcmsContext'];
        }
        if (isset($map['ReasonMcmsKey'])) {
            $model->reasonMcmsKey = $map['ReasonMcmsKey'];
        }
        if (isset($map['UpstreamErrorDetail'])) {
            $model->upstreamErrorDetail = $map['UpstreamErrorDetail'];
        }

        return $model;
    }
}
