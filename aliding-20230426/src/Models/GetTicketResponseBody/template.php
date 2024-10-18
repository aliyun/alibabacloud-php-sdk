<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetTicketResponseBody;

use AlibabaCloud\Tea\Model;

class template extends Model
{
    /**
     * @description OpenTemplateBizId
     *
     * @example OpenTemplateBizId
     *
     * @var string
     */
    public $openTemplateBizId;

    /**
     * @description OpenTemplateBizId
     *
     * @example OpenTemplateBizId
     *
     * @var string
     */
    public $openTemplateId;

    /**
     * @var string
     */
    public $templateName;
    protected $_name = [
        'openTemplateBizId' => 'OpenTemplateBizId',
        'openTemplateId'    => 'OpenTemplateId',
        'templateName'      => 'TemplateName',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return template
     */
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
