<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceResponseBody;

use AlibabaCloud\Tea\Model;

class serviceDocumentInfos extends Model
{
    /**
     * @description The URL that is used to access the document.
     *
     * @example http://docurl
     *
     * @var string
     */
    public $documentUrl;

    /**
     * @description The language of the return data. Valid values: zh-CN and en-US.
     *
     * @example zh-CN
     *
     * @var string
     */
    public $locale;

    /**
     * @description The template name.
     *
     * @example Default Template.
     *
     * @var string
     */
    public $templateName;
    protected $_name = [
        'documentUrl' => 'DocumentUrl',
        'locale' => 'Locale',
        'templateName' => 'TemplateName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->documentUrl) {
            $res['DocumentUrl'] = $this->documentUrl;
        }
        if (null !== $this->locale) {
            $res['Locale'] = $this->locale;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serviceDocumentInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DocumentUrl'])) {
            $model->documentUrl = $map['DocumentUrl'];
        }
        if (isset($map['Locale'])) {
            $model->locale = $map['Locale'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        return $model;
    }
}
