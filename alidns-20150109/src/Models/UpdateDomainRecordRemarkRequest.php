<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class UpdateDomainRecordRemarkRequest extends Model
{
    /**
     * @description The language of the content within the request and response. Default value: **zh**. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example cn
     *
     * @var string
     */
    public $lang;

    /**
     * @description The ID of the DNS record. You can call the [DescribeDomainRecords](https://www.alibabacloud.com/help/zh/dns/api-alidns-2015-01-09-describedomainrecords?spm=a2c63.p38356.help-menu-search-29697.d_0) operation to obtain the ID.
     *
     * This parameter is required.
     *
     * @example 12345678
     *
     * @var string
     */
    public $recordId;

    /**
     * @description The description of the DNS record. This parameter is empty by default. If this parameter is empty, the original remarks are deleted.
     *
     * @var string
     */
    public $remark;

    /**
     * @description The IP address of the client.
     *
     * @example 192.0.2.0
     *
     * @var string
     */
    public $userClientIp;
    protected $_name = [
        'lang' => 'Lang',
        'recordId' => 'RecordId',
        'remark' => 'Remark',
        'userClientIp' => 'UserClientIp',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->recordId) {
            $res['RecordId'] = $this->recordId;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDomainRecordRemarkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['RecordId'])) {
            $model->recordId = $map['RecordId'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }

        return $model;
    }
}
