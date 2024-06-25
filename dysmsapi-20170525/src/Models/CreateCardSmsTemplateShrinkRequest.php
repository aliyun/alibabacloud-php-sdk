<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class CreateCardSmsTemplateShrinkRequest extends Model
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
     * @var string
     */
    public $templateShrink;

    /**
     * @description The name of the card message template.
     *
     * This parameter is required.
     * @var string
     */
    public $templateName;
    protected $_name = [
        'factorys'       => 'Factorys',
        'memo'           => 'Memo',
        'templateShrink' => 'Template',
        'templateName'   => 'TemplateName',
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
        if (null !== $this->templateShrink) {
            $res['Template'] = $this->templateShrink;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCardSmsTemplateShrinkRequest
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
            $model->templateShrink = $map['Template'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        return $model;
    }
}
