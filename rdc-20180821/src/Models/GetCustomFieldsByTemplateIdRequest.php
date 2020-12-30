<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rdc\V20180821\Models;

use AlibabaCloud\Tea\Model;

class GetCustomFieldsByTemplateIdRequest extends Model
{
    /**
     * @var int
     */
    public $AKProjectId;

    /**
     * @var int
     */
    public $templateId;

    /**
     * @var string
     */
    public $corpIdentifier;
    protected $_name = [
        'AKProjectId'    => 'AKProjectId',
        'templateId'     => 'TemplateId',
        'corpIdentifier' => 'CorpIdentifier',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->AKProjectId) {
            $res['AKProjectId'] = $this->AKProjectId;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->corpIdentifier) {
            $res['CorpIdentifier'] = $this->corpIdentifier;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCustomFieldsByTemplateIdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AKProjectId'])) {
            $model->AKProjectId = $map['AKProjectId'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['CorpIdentifier'])) {
            $model->corpIdentifier = $map['CorpIdentifier'];
        }

        return $model;
    }
}
