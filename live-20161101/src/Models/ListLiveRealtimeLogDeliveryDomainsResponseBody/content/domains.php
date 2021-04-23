<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\ListLiveRealtimeLogDeliveryDomainsResponseBody\content;

use AlibabaCloud\Tea\Model;

class domains extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $domainName;
    protected $_name = [
        'status'     => 'Status',
        'domainName' => 'DomainName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domains
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        return $model;
    }
}
