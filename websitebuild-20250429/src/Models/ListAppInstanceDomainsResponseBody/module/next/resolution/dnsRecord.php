<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ListAppInstanceDomainsResponseBody\module\next\resolution;

use AlibabaCloud\Dara\Model;

class dnsRecord extends Model
{
    /**
     * @var string
     */
    public $host;

    /**
     * @var string
     */
    public $recordType;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'host' => 'Host',
        'recordType' => 'RecordType',
        'value' => 'Value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }

        if (null !== $this->recordType) {
            $res['RecordType'] = $this->recordType;
        }

        if (null !== $this->value) {
            $res['Value'] = $this->value;
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
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }

        if (isset($map['RecordType'])) {
            $model->recordType = $map['RecordType'];
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
