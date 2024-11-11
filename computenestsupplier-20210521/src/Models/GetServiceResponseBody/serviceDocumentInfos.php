<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceResponseBody;

use AlibabaCloud\Tea\Model;

class serviceDocumentInfos extends Model
{
    /**
     * @var string
     */
    public $documentUrl;

    /**
     * @var string
     */
    public $locale;

    /**
     * @var string
     */
    public $templateName;
    protected $_name = [
        'documentUrl'  => 'DocumentUrl',
        'locale'       => 'Locale',
        'templateName' => 'TemplateName',
    ];

    public function validate()
    {
    }

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
