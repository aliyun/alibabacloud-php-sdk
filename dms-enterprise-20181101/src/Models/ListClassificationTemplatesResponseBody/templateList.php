<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListClassificationTemplatesResponseBody;

use AlibabaCloud\Tea\Model;

class templateList extends Model
{
    /**
     * @description The name of the classification template.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The remarks.
     *
     * @example test
     *
     * @var string
     */
    public $remark;

    /**
     * @description The ID of the classification template.
     *
     * @example 3**
     *
     * @var int
     */
    public $templateId;

    /**
     * @description The type of the classification template. Valid values:
     *
     *   **INNER**: built-in template
     *   **USER_DEFINE**: custom template
     *
     * @example USER_DEFINE
     *
     * @var string
     */
    public $templateType;
    protected $_name = [
        'name' => 'Name',
        'remark' => 'Remark',
        'templateId' => 'TemplateId',
        'templateType' => 'TemplateType',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return templateList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }

        return $model;
    }
}
