<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetHostResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetHostResponseBody\host\protocols;

class host extends Model
{
    /**
     * @var string
     */
    public $activeAddressType;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $hostId;

    /**
     * @var string
     */
    public $hostName;

    /**
     * @var string
     */
    public $hostPrivateAddress;

    /**
     * @var string
     */
    public $hostPublicAddress;

    /**
     * @var string
     */
    public $networkDomainId;

    /**
     * @var string
     */
    public $OSType;

    /**
     * @var string
     */
    public $prefKex;

    /**
     * @var protocols[]
     */
    public $protocols;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $sourceInstanceId;

    /**
     * @var string
     */
    public $sourceInstanceState;
    protected $_name = [
        'activeAddressType' => 'ActiveAddressType',
        'comment' => 'Comment',
        'hostId' => 'HostId',
        'hostName' => 'HostName',
        'hostPrivateAddress' => 'HostPrivateAddress',
        'hostPublicAddress' => 'HostPublicAddress',
        'networkDomainId' => 'NetworkDomainId',
        'OSType' => 'OSType',
        'prefKex' => 'PrefKex',
        'protocols' => 'Protocols',
        'source' => 'Source',
        'sourceInstanceId' => 'SourceInstanceId',
        'sourceInstanceState' => 'SourceInstanceState',
    ];

    public function validate()
    {
        if (\is_array($this->protocols)) {
            Model::validateArray($this->protocols);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activeAddressType) {
            $res['ActiveAddressType'] = $this->activeAddressType;
        }

        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }

        if (null !== $this->hostId) {
            $res['HostId'] = $this->hostId;
        }

        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }

        if (null !== $this->hostPrivateAddress) {
            $res['HostPrivateAddress'] = $this->hostPrivateAddress;
        }

        if (null !== $this->hostPublicAddress) {
            $res['HostPublicAddress'] = $this->hostPublicAddress;
        }

        if (null !== $this->networkDomainId) {
            $res['NetworkDomainId'] = $this->networkDomainId;
        }

        if (null !== $this->OSType) {
            $res['OSType'] = $this->OSType;
        }

        if (null !== $this->prefKex) {
            $res['PrefKex'] = $this->prefKex;
        }

        if (null !== $this->protocols) {
            if (\is_array($this->protocols)) {
                $res['Protocols'] = [];
                $n1 = 0;
                foreach ($this->protocols as $item1) {
                    $res['Protocols'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        if (null !== $this->sourceInstanceId) {
            $res['SourceInstanceId'] = $this->sourceInstanceId;
        }

        if (null !== $this->sourceInstanceState) {
            $res['SourceInstanceState'] = $this->sourceInstanceState;
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
        if (isset($map['ActiveAddressType'])) {
            $model->activeAddressType = $map['ActiveAddressType'];
        }

        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        if (isset($map['HostId'])) {
            $model->hostId = $map['HostId'];
        }

        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }

        if (isset($map['HostPrivateAddress'])) {
            $model->hostPrivateAddress = $map['HostPrivateAddress'];
        }

        if (isset($map['HostPublicAddress'])) {
            $model->hostPublicAddress = $map['HostPublicAddress'];
        }

        if (isset($map['NetworkDomainId'])) {
            $model->networkDomainId = $map['NetworkDomainId'];
        }

        if (isset($map['OSType'])) {
            $model->OSType = $map['OSType'];
        }

        if (isset($map['PrefKex'])) {
            $model->prefKex = $map['PrefKex'];
        }

        if (isset($map['Protocols'])) {
            if (!empty($map['Protocols'])) {
                $model->protocols = [];
                $n1 = 0;
                foreach ($map['Protocols'] as $item1) {
                    $model->protocols[$n1] = protocols::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        if (isset($map['SourceInstanceId'])) {
            $model->sourceInstanceId = $map['SourceInstanceId'];
        }

        if (isset($map['SourceInstanceState'])) {
            $model->sourceInstanceState = $map['SourceInstanceState'];
        }

        return $model;
    }
}
