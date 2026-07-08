<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appflow\V20230904\Models\ListFlowsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appflow\V20230904\Models\ListFlowsResponseBody\flows\tags;

class flows extends Model
{
    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $flowDesc;

    /**
     * @var string
     */
    public $flowId;

    /**
     * @var string
     */
    public $flowName;

    /**
     * @var string
     */
    public $flowTemplate;

    /**
     * @var string
     */
    public $flowVersion;

    /**
     * @var string
     */
    public $flowVersionStatus;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $releasedVersion;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $webhookUrl;
    protected $_name = [
        'enabled' => 'Enabled',
        'flowDesc' => 'FlowDesc',
        'flowId' => 'FlowId',
        'flowName' => 'FlowName',
        'flowTemplate' => 'FlowTemplate',
        'flowVersion' => 'FlowVersion',
        'flowVersionStatus' => 'FlowVersionStatus',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'releasedVersion' => 'ReleasedVersion',
        'tags' => 'Tags',
        'webhookUrl' => 'WebhookUrl',
    ];

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        if (null !== $this->flowDesc) {
            $res['FlowDesc'] = $this->flowDesc;
        }

        if (null !== $this->flowId) {
            $res['FlowId'] = $this->flowId;
        }

        if (null !== $this->flowName) {
            $res['FlowName'] = $this->flowName;
        }

        if (null !== $this->flowTemplate) {
            $res['FlowTemplate'] = $this->flowTemplate;
        }

        if (null !== $this->flowVersion) {
            $res['FlowVersion'] = $this->flowVersion;
        }

        if (null !== $this->flowVersionStatus) {
            $res['FlowVersionStatus'] = $this->flowVersionStatus;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->releasedVersion) {
            $res['ReleasedVersion'] = $this->releasedVersion;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->webhookUrl) {
            $res['WebhookUrl'] = $this->webhookUrl;
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
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        if (isset($map['FlowDesc'])) {
            $model->flowDesc = $map['FlowDesc'];
        }

        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }

        if (isset($map['FlowName'])) {
            $model->flowName = $map['FlowName'];
        }

        if (isset($map['FlowTemplate'])) {
            $model->flowTemplate = $map['FlowTemplate'];
        }

        if (isset($map['FlowVersion'])) {
            $model->flowVersion = $map['FlowVersion'];
        }

        if (isset($map['FlowVersionStatus'])) {
            $model->flowVersionStatus = $map['FlowVersionStatus'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['ReleasedVersion'])) {
            $model->releasedVersion = $map['ReleasedVersion'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['WebhookUrl'])) {
            $model->webhookUrl = $map['WebhookUrl'];
        }

        return $model;
    }
}
