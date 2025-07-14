<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Tea\Model;

class SetDefaultDomainRequest extends Model
{
    /**
     * @description The default domain name.
     *
     * The default domain name is in the format of `<AccountAlias>.onaliyun.com`. `<AccountAlias>` indicates the account alias. By default, the value of AccountAlias is the ID of the Alibaba Cloud account. The default domain name must end with `.onaliyun.com`.
     *
     * The default domain name can contain up to 64 characters in length. The default domain name can contain letters, digits, periods (.), underscores (_), and hyphens (-).
     *
     * >  The default domain name cannot start or end with a hyphen (-) and cannot contain two consecutive hyphens (-).
     *
     * This parameter is required.
     *
     * @example examplecompany.onaliyun.com
     *
     * @var string
     */
    public $defaultDomainName;
    protected $_name = [
        'defaultDomainName' => 'DefaultDomainName',
    ];

    public function validate() {}

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
