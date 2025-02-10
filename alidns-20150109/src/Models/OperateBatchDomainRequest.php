<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\OperateBatchDomainRequest\domainRecordInfo;

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
        if (\is_array($this->domainRecordInfo)) {
            Model::validateArray($this->domainRecordInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainRecordInfo) {
            if (\is_array($this->domainRecordInfo)) {
                $res['DomainRecordInfo'] = [];
                $n1                      = 0;
                foreach ($this->domainRecordInfo as $item1) {
                    $res['DomainRecordInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainRecordInfo'])) {
            if (!empty($map['DomainRecordInfo'])) {
                $model->domainRecordInfo = [];
                $n1                      = 0;
                foreach ($map['DomainRecordInfo'] as $item1) {
                    $model->domainRecordInfo[$n1++] = domainRecordInfo::fromMap($item1);
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
