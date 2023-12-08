<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class CreateDcdnSubTaskRequest extends Model
{
    /**
     * @description [](https://workorder-intl.console.aliyun.com/?spm=5176.2020520001.aliyun_topbar.18.dbd44bd3e4f845#/ticket/createIndex)
     *
     ****
     * @example example.com,example.org
     *
     * @var string
     */
    public $domainName;

    /**
     * @description *   ****
     *   ****
     * @example 2,4,6
     *
     * @var string
     */
    public $reportIds;
    protected $_name = [
        'domainName' => 'DomainName',
        'reportIds'  => 'ReportIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->reportIds) {
            $res['ReportIds'] = $this->reportIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDcdnSubTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['ReportIds'])) {
            $model->reportIds = $map['ReportIds'];
        }

        return $model;
    }
}
