<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Tea\Model;

class ListPredefinedScopesRequest extends Model
{
    /**
     * @var string
     */
    public $akProxySuffix;

    /**
     * @var string
     */
    public $appType;
    protected $_name = [
        'akProxySuffix' => 'AkProxySuffix',
        'appType'       => 'AppType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->akProxySuffix) {
            $res['AkProxySuffix'] = $this->akProxySuffix;
        }
        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPredefinedScopesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AkProxySuffix'])) {
            $model->akProxySuffix = $map['AkProxySuffix'];
        }
        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }

        return $model;
    }
}
