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
    protected $_name = [
        'defaultDomainName' => 'DefaultDomainName',
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

        return $model;
    }
}
