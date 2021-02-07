<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Tea\Model;

class SetDefaultDomainRequest extends Model
{
    /**
     * @var string
     */
    public $defaultDomainName;

    /**
     * @var string
     */
    public $akProxySuffix;
    protected $_name = [
        'defaultDomainName' => 'DefaultDomainName',
        'akProxySuffix'     => 'AkProxySuffix',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defaultDomainName) {
            $res['DefaultDomainName'] = $this->defaultDomainName;
        }
        if (null !== $this->akProxySuffix) {
            $res['AkProxySuffix'] = $this->akProxySuffix;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetDefaultDomainRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DefaultDomainName'])) {
            $model->defaultDomainName = $map['DefaultDomainName'];
        }
        if (isset($map['AkProxySuffix'])) {
            $model->akProxySuffix = $map['AkProxySuffix'];
        }

        return $model;
    }
}
