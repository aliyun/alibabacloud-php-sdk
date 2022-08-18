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
     * @var string
     */
    public $lang;

    /**
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
