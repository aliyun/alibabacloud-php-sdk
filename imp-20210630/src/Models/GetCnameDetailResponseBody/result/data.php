<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models\GetCnameDetailResponseBody\result;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description cname名称
     *
     * @var string
     */
    public $cname;

    /**
     * @description 域名名称
     *
     * @var string
     */
    public $domainName;

    /**
     * @description cname的状态
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'cname'      => 'Cname',
        'domainName' => 'DomainName',
        'status'     => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cname) {
            $res['Cname'] = $this->cname;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cname'])) {
            $model->cname = $map['Cname'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
