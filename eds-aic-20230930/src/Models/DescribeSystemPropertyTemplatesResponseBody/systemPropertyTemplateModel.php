<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeSystemPropertyTemplatesResponseBody;

use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeSystemPropertyTemplatesResponseBody\systemPropertyTemplateModel\systemPropertyInfo;
use AlibabaCloud\Tea\Model;

class systemPropertyTemplateModel extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $enableAuto;

    /**
     * @example https://filepath****.com
     *
     * @var string
     */
    public $filePath;

    /**
     * @example init
     *
     * @var string
     */
    public $status;

    /**
     * @var systemPropertyInfo
     */
    public $systemPropertyInfo;

    /**
     * @example ap-0caoenwutkkx****
     *
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $templateName;
    protected $_name = [
        'enableAuto' => 'EnableAuto',
        'filePath' => 'FilePath',
        'status' => 'Status',
        'systemPropertyInfo' => 'SystemPropertyInfo',
        'templateId' => 'TemplateId',
        'templateName' => 'TemplateName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableAuto) {
            $res['EnableAuto'] = $this->enableAuto;
        }
        if (null !== $this->filePath) {
            $res['FilePath'] = $this->filePath;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->systemPropertyInfo) {
            $res['SystemPropertyInfo'] = null !== $this->systemPropertyInfo ? $this->systemPropertyInfo->toMap() : null;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return systemPropertyTemplateModel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableAuto'])) {
            $model->enableAuto = $map['EnableAuto'];
        }
        if (isset($map['FilePath'])) {
            $model->filePath = $map['FilePath'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SystemPropertyInfo'])) {
            $model->systemPropertyInfo = systemPropertyInfo::fromMap($map['SystemPropertyInfo']);
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        return $model;
    }
}
