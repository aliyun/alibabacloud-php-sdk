<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models\GetLiveDomainStatusResponseBody\result;

use AlibabaCloud\Tea\Model;

class liveDomainInfoList extends Model
{
    /**
     * @description 直播域名
     *
     * @var string
     */
    public $domain;

    /**
     * @description 直播域名CNAME
     *
     * @var string
     */
    public $cname;

    /**
     * @description 直播域名状态
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'domain' => 'Domain',
        'cname'  => 'Cname',
        'status' => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->cname) {
            $res['Cname'] = $this->cname;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return liveDomainInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Cname'])) {
            $model->cname = $map['Cname'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
