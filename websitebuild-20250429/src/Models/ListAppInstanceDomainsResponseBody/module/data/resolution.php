<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ListAppInstanceDomainsResponseBody\module\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ListAppInstanceDomainsResponseBody\module\data\resolution\dnsRecord;

class resolution extends Model
{
    /**
     * @var dnsRecord
     */
    public $dnsRecord;

    /**
     * @var string
     */
    public $errorMsg;

    /**
     * @var string
     */
    public $resolutionStatus;
    protected $_name = [
        'dnsRecord' => 'DnsRecord',
        'errorMsg' => 'ErrorMsg',
        'resolutionStatus' => 'ResolutionStatus',
    ];

    public function validate()
    {
        if (null !== $this->dnsRecord) {
            $this->dnsRecord->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dnsRecord) {
            $res['DnsRecord'] = null !== $this->dnsRecord ? $this->dnsRecord->toArray($noStream) : $this->dnsRecord;
        }

        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }

        if (null !== $this->resolutionStatus) {
            $res['ResolutionStatus'] = $this->resolutionStatus;
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
        if (isset($map['DnsRecord'])) {
            $model->dnsRecord = dnsRecord::fromMap($map['DnsRecord']);
        }

        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }

        if (isset($map['ResolutionStatus'])) {
            $model->resolutionStatus = $map['ResolutionStatus'];
        }

        return $model;
    }
}
