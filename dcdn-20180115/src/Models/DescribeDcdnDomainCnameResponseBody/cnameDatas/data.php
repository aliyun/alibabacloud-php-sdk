<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainCnameResponseBody\cnameDatas;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The CNAME assigned to the domain name.
     *
     * @example *.com
     *
     * @var string
     */
    public $cname;

    /**
     * @description The accelerated domain name.
     *
     * @example .example.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The configuration status of the CNAME record. If the operation returns 0 for the parameter, the configuration was successful. Otherwise, the configuration failed.
     *
     * @example 0
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'cname'  => 'Cname',
        'domain' => 'Domain',
        'status' => 'Status',
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
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
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
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
