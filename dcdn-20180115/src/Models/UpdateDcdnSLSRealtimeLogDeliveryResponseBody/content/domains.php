<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\UpdateDcdnSLSRealtimeLogDeliveryResponseBody\content;

use AlibabaCloud\Tea\Model;

class domains extends Model
{
    /**
     * @example created
     *
     * @var string
     */
    public $desc;

    /**
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @example cn
     *
     * @var string
     */
    public $region;

    /**
     * @example success
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'desc'       => 'Desc',
        'domainName' => 'DomainName',
        'region'     => 'Region',
        'status'     => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
