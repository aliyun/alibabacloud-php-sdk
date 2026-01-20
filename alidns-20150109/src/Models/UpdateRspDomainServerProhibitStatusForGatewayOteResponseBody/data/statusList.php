<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateRspDomainServerProhibitStatusForGatewayOteResponseBody\data;

use AlibabaCloud\Dara\Model;

class statusList extends Model
{
    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $statusMsg;
    protected $_name = [
        'domainName' => 'DomainName',
        'status' => 'Status',
        'statusMsg' => 'StatusMsg',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->statusMsg) {
            $res['StatusMsg'] = $this->statusMsg;
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
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StatusMsg'])) {
            $model->statusMsg = $map['StatusMsg'];
        }

        return $model;
    }
}
