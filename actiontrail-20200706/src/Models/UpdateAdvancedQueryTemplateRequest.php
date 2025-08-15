<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Actiontrail\V20200706\Models;

use AlibabaCloud\Dara\Model;

class UpdateAdvancedQueryTemplateRequest extends Model
{
    /**
     * @var bool
     */
    public $simpleQuery;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var string
     */
    public $templateSql;
    protected $_name = [
        'simpleQuery' => 'SimpleQuery',
        'templateId' => 'TemplateId',
        'templateName' => 'TemplateName',
        'templateSql' => 'TemplateSql',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->simpleQuery) {
            $res['SimpleQuery'] = $this->simpleQuery;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }

        if (null !== $this->templateSql) {
            $res['TemplateSql'] = $this->templateSql;
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
        if (isset($map['SimpleQuery'])) {
            $model->simpleQuery = $map['SimpleQuery'];
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        if (isset($map['TemplateSql'])) {
            $model->templateSql = $map['TemplateSql'];
        }

        return $model;
    }
}
