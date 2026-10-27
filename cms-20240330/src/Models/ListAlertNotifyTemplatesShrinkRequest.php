<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class ListAlertNotifyTemplatesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $alertNotifyTemplateIdsShrink;

    /**
     * @var string
     */
    public $alertNotifyTemplateName;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $programLang;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'alertNotifyTemplateIdsShrink' => 'alertNotifyTemplateIds',
        'alertNotifyTemplateName' => 'alertNotifyTemplateName',
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
        'programLang' => 'programLang',
        'type' => 'type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertNotifyTemplateIdsShrink) {
            $res['alertNotifyTemplateIds'] = $this->alertNotifyTemplateIdsShrink;
        }

        if (null !== $this->alertNotifyTemplateName) {
            $res['alertNotifyTemplateName'] = $this->alertNotifyTemplateName;
        }

        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->programLang) {
            $res['programLang'] = $this->programLang;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['alertNotifyTemplateIds'])) {
            $model->alertNotifyTemplateIdsShrink = $map['alertNotifyTemplateIds'];
        }

        if (isset($map['alertNotifyTemplateName'])) {
            $model->alertNotifyTemplateName = $map['alertNotifyTemplateName'];
        }

        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['programLang'])) {
            $model->programLang = $map['programLang'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
