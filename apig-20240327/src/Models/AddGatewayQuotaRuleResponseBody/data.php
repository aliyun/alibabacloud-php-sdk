<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\AddGatewayQuotaRuleResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\AddGatewayQuotaRuleResponseBody\data\conflictPreview;

class data extends Model
{
    /**
     * @var string
     */
    public $accepted;

    /**
     * @var conflictPreview
     */
    public $conflictPreview;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var string
     */
    public $ruleId;
    protected $_name = [
        'accepted' => 'accepted',
        'conflictPreview' => 'conflictPreview',
        'dryRun' => 'dryRun',
        'ruleId' => 'ruleId',
    ];

    public function validate()
    {
        if (null !== $this->conflictPreview) {
            $this->conflictPreview->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accepted) {
            $res['accepted'] = $this->accepted;
        }

        if (null !== $this->conflictPreview) {
            $res['conflictPreview'] = null !== $this->conflictPreview ? $this->conflictPreview->toArray($noStream) : $this->conflictPreview;
        }

        if (null !== $this->dryRun) {
            $res['dryRun'] = $this->dryRun;
        }

        if (null !== $this->ruleId) {
            $res['ruleId'] = $this->ruleId;
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
        if (isset($map['accepted'])) {
            $model->accepted = $map['accepted'];
        }

        if (isset($map['conflictPreview'])) {
            $model->conflictPreview = conflictPreview::fromMap($map['conflictPreview']);
        }

        if (isset($map['dryRun'])) {
            $model->dryRun = $map['dryRun'];
        }

        if (isset($map['ruleId'])) {
            $model->ruleId = $map['ruleId'];
        }

        return $model;
    }
}
