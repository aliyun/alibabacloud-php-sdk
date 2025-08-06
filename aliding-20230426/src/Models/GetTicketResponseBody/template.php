<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetTicketResponseBody;

use AlibabaCloud\Dara\Model;

class template extends Model
{
    /**
     * @var string
     */
    public $openTemplateBizId;

    /**
     * @var string
     */
    public $openTemplateId;

    /**
     * @var string
     */
    public $templateName;
    protected $_name = [
        'openTemplateBizId' => 'OpenTemplateBizId',
        'openTemplateId' => 'OpenTemplateId',
        'templateName' => 'TemplateName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->openTemplateBizId) {
            $res['OpenTemplateBizId'] = $this->openTemplateBizId;
        }

        if (null !== $this->openTemplateId) {
            $res['OpenTemplateId'] = $this->openTemplateId;
        }

        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
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
        if (isset($map['OpenTemplateBizId'])) {
            $model->openTemplateBizId = $map['OpenTemplateBizId'];
        }

        if (isset($map['OpenTemplateId'])) {
            $model->openTemplateId = $map['OpenTemplateId'];
        }

        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        return $model;
    }
}
