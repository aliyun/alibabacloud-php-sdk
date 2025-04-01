<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\StartProjectResponseBody;

use AlibabaCloud\Dara\Model;

class errorDetail extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var mixed[]
     */
    public $extraContext;

    /**
     * @var string
     */
    public $level;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string[]
     */
    public $messageMcmsContext;

    /**
     * @var string
     */
    public $messageMcmsKey;

    /**
     * @var string
     */
    public $proposal;

    /**
     * @var string[]
     */
    public $proposalMcmsContext;

    /**
     * @var string
     */
    public $proposalMcmsKey;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var string[]
     */
    public $reasonMcmsContext;

    /**
     * @var string
     */
    public $reasonMcmsKey;

    /**
     * @var mixed
     */
    public $upstreamErrorDetail;
    protected $_name = [
        'code' => 'Code',
        'extraContext' => 'ExtraContext',
        'level' => 'Level',
        'message' => 'Message',
        'messageMcmsContext' => 'MessageMcmsContext',
        'messageMcmsKey' => 'MessageMcmsKey',
        'proposal' => 'Proposal',
        'proposalMcmsContext' => 'ProposalMcmsContext',
        'proposalMcmsKey' => 'ProposalMcmsKey',
        'reason' => 'Reason',
        'reasonMcmsContext' => 'ReasonMcmsContext',
        'reasonMcmsKey' => 'ReasonMcmsKey',
        'upstreamErrorDetail' => 'UpstreamErrorDetail',
    ];

    public function validate()
    {
        if (\is_array($this->extraContext)) {
            Model::validateArray($this->extraContext);
        }
        if (\is_array($this->messageMcmsContext)) {
            Model::validateArray($this->messageMcmsContext);
        }
        if (\is_array($this->proposalMcmsContext)) {
            Model::validateArray($this->proposalMcmsContext);
        }
        if (\is_array($this->reasonMcmsContext)) {
            Model::validateArray($this->reasonMcmsContext);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->extraContext) {
            if (\is_array($this->extraContext)) {
                $res['ExtraContext'] = [];
                foreach ($this->extraContext as $key1 => $value1) {
                    $res['ExtraContext'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->messageMcmsContext) {
            if (\is_array($this->messageMcmsContext)) {
                $res['MessageMcmsContext'] = [];
                foreach ($this->messageMcmsContext as $key1 => $value1) {
                    $res['MessageMcmsContext'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->messageMcmsKey) {
            $res['MessageMcmsKey'] = $this->messageMcmsKey;
        }

        if (null !== $this->proposal) {
            $res['Proposal'] = $this->proposal;
        }

        if (null !== $this->proposalMcmsContext) {
            if (\is_array($this->proposalMcmsContext)) {
                $res['ProposalMcmsContext'] = [];
                foreach ($this->proposalMcmsContext as $key1 => $value1) {
                    $res['ProposalMcmsContext'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->proposalMcmsKey) {
            $res['ProposalMcmsKey'] = $this->proposalMcmsKey;
        }

        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }

        if (null !== $this->reasonMcmsContext) {
            if (\is_array($this->reasonMcmsContext)) {
                $res['ReasonMcmsContext'] = [];
                foreach ($this->reasonMcmsContext as $key1 => $value1) {
                    $res['ReasonMcmsContext'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->reasonMcmsKey) {
            $res['ReasonMcmsKey'] = $this->reasonMcmsKey;
        }

        if (null !== $this->upstreamErrorDetail) {
            $res['UpstreamErrorDetail'] = $this->upstreamErrorDetail;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['ExtraContext'])) {
            if (!empty($map['ExtraContext'])) {
                $model->extraContext = [];
                foreach ($map['ExtraContext'] as $key1 => $value1) {
                    $model->extraContext[$key1] = $value1;
                }
            }
        }

        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['MessageMcmsContext'])) {
            if (!empty($map['MessageMcmsContext'])) {
                $model->messageMcmsContext = [];
                foreach ($map['MessageMcmsContext'] as $key1 => $value1) {
                    $model->messageMcmsContext[$key1] = $value1;
                }
            }
        }

        if (isset($map['MessageMcmsKey'])) {
            $model->messageMcmsKey = $map['MessageMcmsKey'];
        }

        if (isset($map['Proposal'])) {
            $model->proposal = $map['Proposal'];
        }

        if (isset($map['ProposalMcmsContext'])) {
            if (!empty($map['ProposalMcmsContext'])) {
                $model->proposalMcmsContext = [];
                foreach ($map['ProposalMcmsContext'] as $key1 => $value1) {
                    $model->proposalMcmsContext[$key1] = $value1;
                }
            }
        }

        if (isset($map['ProposalMcmsKey'])) {
            $model->proposalMcmsKey = $map['ProposalMcmsKey'];
        }

        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        if (isset($map['ReasonMcmsContext'])) {
            if (!empty($map['ReasonMcmsContext'])) {
                $model->reasonMcmsContext = [];
                foreach ($map['ReasonMcmsContext'] as $key1 => $value1) {
                    $model->reasonMcmsContext[$key1] = $value1;
                }
            }
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
