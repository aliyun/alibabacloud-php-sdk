<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateKnowledgeSourceRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateKnowledgeSourceRequest\document\dingTalk;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateKnowledgeSourceRequest\document\feishu;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateKnowledgeSourceRequest\document\lark;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateKnowledgeSourceRequest\document\weCom;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateKnowledgeSourceRequest\document\yuque;

class document extends Model
{
    /**
     * @var string
     */
    public $connectorType;

    /**
     * @var dingTalk
     */
    public $dingTalk;

    /**
     * @var feishu
     */
    public $feishu;

    /**
     * @var lark
     */
    public $lark;

    /**
     * @var weCom
     */
    public $weCom;

    /**
     * @var yuque
     */
    public $yuque;
    protected $_name = [
        'connectorType' => 'ConnectorType',
        'dingTalk' => 'DingTalk',
        'feishu' => 'Feishu',
        'lark' => 'Lark',
        'weCom' => 'WeCom',
        'yuque' => 'Yuque',
    ];

    public function validate()
    {
        if (null !== $this->dingTalk) {
            $this->dingTalk->validate();
        }
        if (null !== $this->feishu) {
            $this->feishu->validate();
        }
        if (null !== $this->lark) {
            $this->lark->validate();
        }
        if (null !== $this->weCom) {
            $this->weCom->validate();
        }
        if (null !== $this->yuque) {
            $this->yuque->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connectorType) {
            $res['ConnectorType'] = $this->connectorType;
        }

        if (null !== $this->dingTalk) {
            $res['DingTalk'] = null !== $this->dingTalk ? $this->dingTalk->toArray($noStream) : $this->dingTalk;
        }

        if (null !== $this->feishu) {
            $res['Feishu'] = null !== $this->feishu ? $this->feishu->toArray($noStream) : $this->feishu;
        }

        if (null !== $this->lark) {
            $res['Lark'] = null !== $this->lark ? $this->lark->toArray($noStream) : $this->lark;
        }

        if (null !== $this->weCom) {
            $res['WeCom'] = null !== $this->weCom ? $this->weCom->toArray($noStream) : $this->weCom;
        }

        if (null !== $this->yuque) {
            $res['Yuque'] = null !== $this->yuque ? $this->yuque->toArray($noStream) : $this->yuque;
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
        if (isset($map['ConnectorType'])) {
            $model->connectorType = $map['ConnectorType'];
        }

        if (isset($map['DingTalk'])) {
            $model->dingTalk = dingTalk::fromMap($map['DingTalk']);
        }

        if (isset($map['Feishu'])) {
            $model->feishu = feishu::fromMap($map['Feishu']);
        }

        if (isset($map['Lark'])) {
            $model->lark = lark::fromMap($map['Lark']);
        }

        if (isset($map['WeCom'])) {
            $model->weCom = weCom::fromMap($map['WeCom']);
        }

        if (isset($map['Yuque'])) {
            $model->yuque = yuque::fromMap($map['Yuque']);
        }

        return $model;
    }
}
