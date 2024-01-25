<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudesl\V20200201\Models;

use AlibabaCloud\Tea\Model;

class ApplyCompanyTemplateVersionToStoresRequest extends Model
{
    /**
     * @example [\"s-y9eoecc7mu\"]
     *
     * @var string
     */
    public $stores;

    /**
     * @example 1.1.0
     *
     * @var string
     */
    public $templateVersion;
    protected $_name = [
        'stores'          => 'Stores',
        'templateVersion' => 'TemplateVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->stores) {
            $res['Stores'] = $this->stores;
        }
        if (null !== $this->templateVersion) {
            $res['TemplateVersion'] = $this->templateVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ApplyCompanyTemplateVersionToStoresRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Stores'])) {
            $model->stores = $map['Stores'];
        }
        if (isset($map['TemplateVersion'])) {
            $model->templateVersion = $map['TemplateVersion'];
        }

        return $model;
    }
}
