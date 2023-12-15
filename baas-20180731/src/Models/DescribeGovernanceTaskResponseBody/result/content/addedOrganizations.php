<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\DescribeGovernanceTaskResponseBody\result\content;

use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeGovernanceTaskResponseBody\result\content\addedOrganizations\anchorPeers;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeGovernanceTaskResponseBody\result\content\addedOrganizations\ordererNodes;
use AlibabaCloud\Tea\Model;

class addedOrganizations extends Model
{
    /**
     * @var anchorPeers[]
     */
    public $anchorPeers;

    /**
     * @var string
     */
    public $crls;

    /**
     * @var string
     */
    public $mspId;

    /**
     * @var string
     */
    public $mspType;

    /**
     * @var bool
     */
    public $orderer;

    /**
     * @var ordererNodes[]
     */
    public $ordererNodes;

    /**
     * @var string
     */
    public $rootCertificates;

    /**
     * @var string
     */
    public $tlsRootCertificates;
    protected $_name = [
        'anchorPeers'         => 'AnchorPeers',
        'crls'                => 'Crls',
        'mspId'               => 'MspId',
        'mspType'             => 'MspType',
        'orderer'             => 'Orderer',
        'ordererNodes'        => 'OrdererNodes',
        'rootCertificates'    => 'RootCertificates',
        'tlsRootCertificates' => 'TlsRootCertificates',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->anchorPeers) {
            $res['AnchorPeers'] = [];
            if (null !== $this->anchorPeers && \is_array($this->anchorPeers)) {
                $n = 0;
                foreach ($this->anchorPeers as $item) {
                    $res['AnchorPeers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->crls) {
            $res['Crls'] = $this->crls;
        }
        if (null !== $this->mspId) {
            $res['MspId'] = $this->mspId;
        }
        if (null !== $this->mspType) {
            $res['MspType'] = $this->mspType;
        }
        if (null !== $this->orderer) {
            $res['Orderer'] = $this->orderer;
        }
        if (null !== $this->ordererNodes) {
            $res['OrdererNodes'] = [];
            if (null !== $this->ordererNodes && \is_array($this->ordererNodes)) {
                $n = 0;
                foreach ($this->ordererNodes as $item) {
                    $res['OrdererNodes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->rootCertificates) {
            $res['RootCertificates'] = $this->rootCertificates;
        }
        if (null !== $this->tlsRootCertificates) {
            $res['TlsRootCertificates'] = $this->tlsRootCertificates;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return addedOrganizations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AnchorPeers'])) {
            if (!empty($map['AnchorPeers'])) {
                $model->anchorPeers = [];
                $n                  = 0;
                foreach ($map['AnchorPeers'] as $item) {
                    $model->anchorPeers[$n++] = null !== $item ? anchorPeers::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Crls'])) {
            $model->crls = $map['Crls'];
        }
        if (isset($map['MspId'])) {
            $model->mspId = $map['MspId'];
        }
        if (isset($map['MspType'])) {
            $model->mspType = $map['MspType'];
        }
        if (isset($map['Orderer'])) {
            $model->orderer = $map['Orderer'];
        }
        if (isset($map['OrdererNodes'])) {
            if (!empty($map['OrdererNodes'])) {
                $model->ordererNodes = [];
                $n                   = 0;
                foreach ($map['OrdererNodes'] as $item) {
                    $model->ordererNodes[$n++] = null !== $item ? ordererNodes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RootCertificates'])) {
            $model->rootCertificates = $map['RootCertificates'];
        }
        if (isset($map['TlsRootCertificates'])) {
            $model->tlsRootCertificates = $map['TlsRootCertificates'];
        }

        return $model;
    }
}
