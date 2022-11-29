<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Serverless\V20210924\Models;

use AlibabaCloud\Tea\Model;

class ListTemplateRevisionsRequest extends Model
{
    /**
     * @var string
     */
    public $templateName;

    /**
     * @var int
     */
    public $templateVersion;
    protected $_name = [
        'templateName'    => 'templateName',
        'templateVersion' => 'templateVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->templateName) {
            $res['templateName'] = $this->templateName;
        }
        if (null !== $this->templateVersion) {
            $res['templateVersion'] = $this->templateVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTemplateRevisionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['templateName'])) {
            $model->templateName = $map['templateName'];
        }
        if (isset($map['templateVersion'])) {
            $model->templateVersion = $map['templateVersion'];
        }

        return $model;
    }
}
