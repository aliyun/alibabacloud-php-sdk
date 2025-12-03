<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20170115\Models\DescribeClusterAttributeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\HBase\V20170115\Models\DescribeClusterAttributeResponseBody\connectionInfo\ZKClassicConnectionStringList;
use AlibabaCloud\SDK\HBase\V20170115\Models\DescribeClusterAttributeResponseBody\connectionInfo\ZKConnectionStringList;
use AlibabaCloud\SDK\HBase\V20170115\Models\DescribeClusterAttributeResponseBody\connectionInfo\ZKInnerConnectionStringList;
use AlibabaCloud\SDK\HBase\V20170115\Models\DescribeClusterAttributeResponseBody\connectionInfo\ZKPublicConnectionStringList;

class connectionInfo extends Model
{
    /**
     * @var string
     */
    public $haRestConnectionString;

    /**
     * @var string
     */
    public $haRestPort;

    /**
     * @var string
     */
    public $haThriftConnectionString;

    /**
     * @var string
     */
    public $haThriftPort;

    /**
     * @var string
     */
    public $thriftConnectionString;

    /**
     * @var string
     */
    public $thriftPort;

    /**
     * @var string
     */
    public $UIProxyConnectionString;

    /**
     * @var ZKClassicConnectionStringList
     */
    public $ZKClassicConnectionStringList;

    /**
     * @var ZKConnectionStringList
     */
    public $ZKConnectionStringList;

    /**
     * @var ZKInnerConnectionStringList
     */
    public $ZKInnerConnectionStringList;

    /**
     * @var int
     */
    public $ZKPort;

    /**
     * @var ZKPublicConnectionStringList
     */
    public $ZKPublicConnectionStringList;
    protected $_name = [
        'haRestConnectionString' => 'HaRestConnectionString',
        'haRestPort' => 'HaRestPort',
        'haThriftConnectionString' => 'HaThriftConnectionString',
        'haThriftPort' => 'HaThriftPort',
        'thriftConnectionString' => 'ThriftConnectionString',
        'thriftPort' => 'ThriftPort',
        'UIProxyConnectionString' => 'UIProxyConnectionString',
        'ZKClassicConnectionStringList' => 'ZKClassicConnectionStringList',
        'ZKConnectionStringList' => 'ZKConnectionStringList',
        'ZKInnerConnectionStringList' => 'ZKInnerConnectionStringList',
        'ZKPort' => 'ZKPort',
        'ZKPublicConnectionStringList' => 'ZKPublicConnectionStringList',
    ];

    public function validate()
    {
        if (null !== $this->ZKClassicConnectionStringList) {
            $this->ZKClassicConnectionStringList->validate();
        }
        if (null !== $this->ZKConnectionStringList) {
            $this->ZKConnectionStringList->validate();
        }
        if (null !== $this->ZKInnerConnectionStringList) {
            $this->ZKInnerConnectionStringList->validate();
        }
        if (null !== $this->ZKPublicConnectionStringList) {
            $this->ZKPublicConnectionStringList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->haRestConnectionString) {
            $res['HaRestConnectionString'] = $this->haRestConnectionString;
        }

        if (null !== $this->haRestPort) {
            $res['HaRestPort'] = $this->haRestPort;
        }

        if (null !== $this->haThriftConnectionString) {
            $res['HaThriftConnectionString'] = $this->haThriftConnectionString;
        }

        if (null !== $this->haThriftPort) {
            $res['HaThriftPort'] = $this->haThriftPort;
        }

        if (null !== $this->thriftConnectionString) {
            $res['ThriftConnectionString'] = $this->thriftConnectionString;
        }

        if (null !== $this->thriftPort) {
            $res['ThriftPort'] = $this->thriftPort;
        }

        if (null !== $this->UIProxyConnectionString) {
            $res['UIProxyConnectionString'] = $this->UIProxyConnectionString;
        }

        if (null !== $this->ZKClassicConnectionStringList) {
            $res['ZKClassicConnectionStringList'] = null !== $this->ZKClassicConnectionStringList ? $this->ZKClassicConnectionStringList->toArray($noStream) : $this->ZKClassicConnectionStringList;
        }

        if (null !== $this->ZKConnectionStringList) {
            $res['ZKConnectionStringList'] = null !== $this->ZKConnectionStringList ? $this->ZKConnectionStringList->toArray($noStream) : $this->ZKConnectionStringList;
        }

        if (null !== $this->ZKInnerConnectionStringList) {
            $res['ZKInnerConnectionStringList'] = null !== $this->ZKInnerConnectionStringList ? $this->ZKInnerConnectionStringList->toArray($noStream) : $this->ZKInnerConnectionStringList;
        }

        if (null !== $this->ZKPort) {
            $res['ZKPort'] = $this->ZKPort;
        }

        if (null !== $this->ZKPublicConnectionStringList) {
            $res['ZKPublicConnectionStringList'] = null !== $this->ZKPublicConnectionStringList ? $this->ZKPublicConnectionStringList->toArray($noStream) : $this->ZKPublicConnectionStringList;
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
        if (isset($map['HaRestConnectionString'])) {
            $model->haRestConnectionString = $map['HaRestConnectionString'];
        }

        if (isset($map['HaRestPort'])) {
            $model->haRestPort = $map['HaRestPort'];
        }

        if (isset($map['HaThriftConnectionString'])) {
            $model->haThriftConnectionString = $map['HaThriftConnectionString'];
        }

        if (isset($map['HaThriftPort'])) {
            $model->haThriftPort = $map['HaThriftPort'];
        }

        if (isset($map['ThriftConnectionString'])) {
            $model->thriftConnectionString = $map['ThriftConnectionString'];
        }

        if (isset($map['ThriftPort'])) {
            $model->thriftPort = $map['ThriftPort'];
        }

        if (isset($map['UIProxyConnectionString'])) {
            $model->UIProxyConnectionString = $map['UIProxyConnectionString'];
        }

        if (isset($map['ZKClassicConnectionStringList'])) {
            $model->ZKClassicConnectionStringList = ZKClassicConnectionStringList::fromMap($map['ZKClassicConnectionStringList']);
        }

        if (isset($map['ZKConnectionStringList'])) {
            $model->ZKConnectionStringList = ZKConnectionStringList::fromMap($map['ZKConnectionStringList']);
        }

        if (isset($map['ZKInnerConnectionStringList'])) {
            $model->ZKInnerConnectionStringList = ZKInnerConnectionStringList::fromMap($map['ZKInnerConnectionStringList']);
        }

        if (isset($map['ZKPort'])) {
            $model->ZKPort = $map['ZKPort'];
        }

        if (isset($map['ZKPublicConnectionStringList'])) {
            $model->ZKPublicConnectionStringList = ZKPublicConnectionStringList::fromMap($map['ZKPublicConnectionStringList']);
        }

        return $model;
    }
}
