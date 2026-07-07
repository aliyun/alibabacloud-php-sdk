<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\BindAppDomainResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\BindAppDomainResponseBody\module\dnsConflict;

class module extends Model
{
    /**
     * @var dnsConflict
     */
    public $dnsConflict;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'dnsConflict' => 'DnsConflict',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (null !== $this->dnsConflict) {
            $this->dnsConflict->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dnsConflict) {
            $res['DnsConflict'] = null !== $this->dnsConflict ? $this->dnsConflict->toArray($noStream) : $this->dnsConflict;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DnsConflict'])) {
            $model->dnsConflict = dnsConflict::fromMap($map['DnsConflict']);
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
