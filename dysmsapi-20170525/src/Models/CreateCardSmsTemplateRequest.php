<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class CreateCardSmsTemplateRequest extends Model
{
    /**
     * @description The mobile phone manufacturer. Valid values:
     *
     *   **HuaWei**: HUAWEI
     *   **XiaoMi**: Xiaomi
     *   **OPPO**: OPPO
     *   **VIVO**: vivo
     *   **MEIZU**: MEIZU
     *
     * > If this parameter is not specified, the system automatically specifies a supported mobile phone manufacturer.
     * @example XiaoMi
     *
     * @var string
     */
    public $factorys;

    /**
     * @description The description of the message template.
     *
     * @example Image and Text Template
     *
     * @var string
     */
    public $memo;

    /**
     * @description The content of the card message template.
     *
     * >
     *
     *   For information about fields such as Template, ExtendInfo, TemplateContent, TmpCard, and Action, see [Parameters of card message templates](https://help.aliyun.com/document_detail/434929.html).
     *
     *   Message template content varies based on the template type. For more information, see [Sample message templates](https://help.aliyun.com/document_detail/435361.html).
     *
     * This parameter is required.
     * @example {
     * }
     * @var mixed[]
     */
    public $template;

    /**
     * @description The name of the card message template.
     *
     * This parameter is required.
     * @example Aliyun Image and Text Template
     *
     * @var string
     */
    public $templateName;
    protected $_name = [
        'factorys'     => 'Factorys',
        'memo'         => 'Memo',
        'template'     => 'Template',
        'templateName' => 'TemplateName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->factorys) {
            $res['Factorys'] = $this->factorys;
        }
        if (null !== $this->memo) {
            $res['Memo'] = $this->memo;
        }
        if (null !== $this->template) {
            $res['Template'] = $this->template;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCardSmsTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Factorys'])) {
            $model->factorys = $map['Factorys'];
        }
        if (isset($map['Memo'])) {
            $model->memo = $map['Memo'];
        }
        if (isset($map['Template'])) {
            $model->template = $map['Template'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        return $model;
    }
}
