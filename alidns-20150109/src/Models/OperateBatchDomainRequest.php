<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\OperateBatchDomainRequest\domainRecordInfo;
use AlibabaCloud\Tea\Model;

class OperateBatchDomainRequest extends Model
{
    /**
     * @var domainRecordInfo[]
     */
    public $domainRecordInfo;

    /**
     * @description The type of the batch operation. Valid values:
     *
     *   **DOMAIN_ADD**: adds domain names in batches.
     *   **DOMAIN_DEL**: deletes domain names in batches.
     *   **RR_ADD**: adds DNS records in batches.
     *   **RR_DEL**: deletes DNS records in batches. (If RR or VALUE exists, DNS records corresponding to the specified RR or VALUE are deleted. If both of them exist, DNS records corresponding to the specified RR and VALUE are deleted. If no RR or VALUE is specified, the DNS records corresponding to the DomainName parameter are deleted.)
     *
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The type of DNS record N. For the DNS record types supported by Alibaba Cloud DNS, see [Resolution record type formats](https://www.alibabacloud.com/help/zh/doc-detail/29805.htm).
     *
     * >  If you set the Type parameter to **RR_ADD**, you must also specify this parameter.
     * @example RR_ADD
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'domainRecordInfo' => 'DomainRecordInfo',
        'lang'             => 'Lang',
        'type'             => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainRecordInfo) {
            $res['DomainRecordInfo'] = [];
            if (null !== $this->domainRecordInfo && \is_array($this->domainRecordInfo)) {
                $n = 0;
                foreach ($this->domainRecordInfo as $item) {
                    $res['DomainRecordInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OperateBatchDomainRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainRecordInfo'])) {
            if (!empty($map['DomainRecordInfo'])) {
                $model->domainRecordInfo = [];
                $n                       = 0;
                foreach ($map['DomainRecordInfo'] as $item) {
                    $model->domainRecordInfo[$n++] = null !== $item ? domainRecordInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
