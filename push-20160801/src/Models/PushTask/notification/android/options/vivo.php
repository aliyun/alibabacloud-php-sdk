<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models\PushTask\notification\android\options;

use AlibabaCloud\Dara\Model;

class vivo extends Model
{
    /**
     * @var bool
     */
    public $addBadge;

    /**
     * @var string
     */
    public $category;

    /**
     * @var int
     */
    public $importance;

    /**
     * @var string
     */
    public $liveMessage;

    /**
     * @var string
     */
    public $receiptId;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $templateParams;
    protected $_name = [
        'addBadge' => 'AddBadge',
        'category' => 'Category',
        'importance' => 'Importance',
        'liveMessage' => 'LiveMessage',
        'receiptId' => 'ReceiptId',
        'templateId' => 'TemplateId',
        'templateParams' => 'TemplateParams',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addBadge) {
            $res['AddBadge'] = $this->addBadge;
        }

        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->importance) {
            $res['Importance'] = $this->importance;
        }

        if (null !== $this->liveMessage) {
            $res['LiveMessage'] = $this->liveMessage;
        }

        if (null !== $this->receiptId) {
            $res['ReceiptId'] = $this->receiptId;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        if (null !== $this->templateParams) {
            $res['TemplateParams'] = $this->templateParams;
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
        if (isset($map['AddBadge'])) {
            $model->addBadge = $map['AddBadge'];
        }

        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['Importance'])) {
            $model->importance = $map['Importance'];
        }

        if (isset($map['LiveMessage'])) {
            $model->liveMessage = $map['LiveMessage'];
        }

        if (isset($map['ReceiptId'])) {
            $model->receiptId = $map['ReceiptId'];
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        if (isset($map['TemplateParams'])) {
            $model->templateParams = $map['TemplateParams'];
        }

        return $model;
    }
}
