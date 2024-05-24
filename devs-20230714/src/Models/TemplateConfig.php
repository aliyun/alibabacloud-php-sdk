<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Tea\Model;

class TemplateConfig extends Model
{
    /**
     * @example {"region":"cn-hangzhou"}
     *
     * @var mixed[]
     */
    public $parameters;

    /**
     * @description This parameter is required.
     *
     * @example start-springboot
     *
     * @var string
     */
    public $templateName;
    protected $_name = [
        'parameters'   => 'parameters',
        'templateName' => 'templateName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->parameters) {
            $res['parameters'] = $this->parameters;
        }
        if (null !== $this->templateName) {
            $res['templateName'] = $this->templateName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TemplateConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['parameters'])) {
            $model->parameters = $map['parameters'];
        }
        if (isset($map['templateName'])) {
            $model->templateName = $map['templateName'];
        }

        return $model;
    }
}
