<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class SendSystemPropertyTemplateRequest extends Model
{
    /**
     * @var string[]
     */
    public $androidInstanceIds;

    /**
     * @example ap-angyvganxlf****
     *
     * @var string
     */
    public $templateId;

    /**
     * @var string[]
     */
    public $templateIds;
    protected $_name = [
        'androidInstanceIds' => 'AndroidInstanceIds',
        'templateId' => 'TemplateId',
        'templateIds' => 'TemplateIds',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->androidInstanceIds) {
            $res['AndroidInstanceIds'] = $this->androidInstanceIds;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->templateIds) {
            $res['TemplateIds'] = $this->templateIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendSystemPropertyTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AndroidInstanceIds'])) {
            if (!empty($map['AndroidInstanceIds'])) {
                $model->androidInstanceIds = $map['AndroidInstanceIds'];
            }
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TemplateIds'])) {
            if (!empty($map['TemplateIds'])) {
                $model->templateIds = $map['TemplateIds'];
            }
        }

        return $model;
    }
}
