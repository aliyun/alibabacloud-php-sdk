<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetNewSqlTemplateListResponseBody;

use AlibabaCloud\Tea\Model;

class results extends Model
{
    /**
     * @var string
     */
    public $templateContent;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $firstCaptureTime;
    protected $_name = [
        'templateContent'  => 'TemplateContent',
        'templateId'       => 'TemplateId',
        'firstCaptureTime' => 'FirstCaptureTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->templateContent) {
            $res['TemplateContent'] = $this->templateContent;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->firstCaptureTime) {
            $res['FirstCaptureTime'] = $this->firstCaptureTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return results
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TemplateContent'])) {
            $model->templateContent = $map['TemplateContent'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['FirstCaptureTime'])) {
            $model->firstCaptureTime = $map['FirstCaptureTime'];
        }

        return $model;
    }
}
