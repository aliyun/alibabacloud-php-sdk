<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;

class AddAuthorityTemplateItemsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $itemsShrink;

    /**
     * @var int
     */
    public $templateId;

    /**
     * @var int
     */
    public $tid;
    protected $_name = [
        'itemsShrink' => 'Items',
        'templateId' => 'TemplateId',
        'tid' => 'Tid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->itemsShrink) {
            $res['Items'] = $this->itemsShrink;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
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
        if (isset($map['Items'])) {
            $model->itemsShrink = $map['Items'];
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
