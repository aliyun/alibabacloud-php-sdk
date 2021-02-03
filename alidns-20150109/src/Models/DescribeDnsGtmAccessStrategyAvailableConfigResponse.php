<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategyAvailableConfigResponse\domainAddrPools;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategyAvailableConfigResponse\ipv4AddrPools;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategyAvailableConfigResponse\ipv6AddrPools;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategyAvailableConfigResponse\lines;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategyAvailableConfigResponse\selectedDomainLines;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategyAvailableConfigResponse\selectedIpv4Lines;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategyAvailableConfigResponse\selectedIpv6Lines;
use AlibabaCloud\Tea\Model;

class DescribeDnsGtmAccessStrategyAvailableConfigResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $suggestSetDefaultLine;

    /**
     * @var ipv4AddrPools
     */
    public $ipv4AddrPools;

    /**
     * @var lines
     */
    public $lines;

    /**
     * @var ipv6AddrPools
     */
    public $ipv6AddrPools;

    /**
     * @var domainAddrPools
     */
    public $domainAddrPools;

    /**
     * @var selectedIpv4Lines
     */
    public $selectedIpv4Lines;

    /**
     * @var selectedIpv6Lines
     */
    public $selectedIpv6Lines;

    /**
     * @var selectedDomainLines
     */
    public $selectedDomainLines;
    protected $_name = [
        'requestId'             => 'RequestId',
        'suggestSetDefaultLine' => 'SuggestSetDefaultLine',
        'ipv4AddrPools'         => 'Ipv4AddrPools',
        'lines'                 => 'Lines',
        'ipv6AddrPools'         => 'Ipv6AddrPools',
        'domainAddrPools'       => 'DomainAddrPools',
        'selectedIpv4Lines'     => 'SelectedIpv4Lines',
        'selectedIpv6Lines'     => 'SelectedIpv6Lines',
        'selectedDomainLines'   => 'SelectedDomainLines',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('suggestSetDefaultLine', $this->suggestSetDefaultLine, true);
        Model::validateRequired('ipv4AddrPools', $this->ipv4AddrPools, true);
        Model::validateRequired('lines', $this->lines, true);
        Model::validateRequired('ipv6AddrPools', $this->ipv6AddrPools, true);
        Model::validateRequired('domainAddrPools', $this->domainAddrPools, true);
        Model::validateRequired('selectedIpv4Lines', $this->selectedIpv4Lines, true);
        Model::validateRequired('selectedIpv6Lines', $this->selectedIpv6Lines, true);
        Model::validateRequired('selectedDomainLines', $this->selectedDomainLines, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->suggestSetDefaultLine) {
            $res['SuggestSetDefaultLine'] = $this->suggestSetDefaultLine;
        }
        if (null !== $this->ipv4AddrPools) {
            $res['Ipv4AddrPools'] = null !== $this->ipv4AddrPools ? $this->ipv4AddrPools->toMap() : null;
        }
        if (null !== $this->lines) {
            $res['Lines'] = null !== $this->lines ? $this->lines->toMap() : null;
        }
        if (null !== $this->ipv6AddrPools) {
            $res['Ipv6AddrPools'] = null !== $this->ipv6AddrPools ? $this->ipv6AddrPools->toMap() : null;
        }
        if (null !== $this->domainAddrPools) {
            $res['DomainAddrPools'] = null !== $this->domainAddrPools ? $this->domainAddrPools->toMap() : null;
        }
        if (null !== $this->selectedIpv4Lines) {
            $res['SelectedIpv4Lines'] = null !== $this->selectedIpv4Lines ? $this->selectedIpv4Lines->toMap() : null;
        }
        if (null !== $this->selectedIpv6Lines) {
            $res['SelectedIpv6Lines'] = null !== $this->selectedIpv6Lines ? $this->selectedIpv6Lines->toMap() : null;
        }
        if (null !== $this->selectedDomainLines) {
            $res['SelectedDomainLines'] = null !== $this->selectedDomainLines ? $this->selectedDomainLines->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDnsGtmAccessStrategyAvailableConfigResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SuggestSetDefaultLine'])) {
            $model->suggestSetDefaultLine = $map['SuggestSetDefaultLine'];
        }
        if (isset($map['Ipv4AddrPools'])) {
            $model->ipv4AddrPools = ipv4AddrPools::fromMap($map['Ipv4AddrPools']);
        }
        if (isset($map['Lines'])) {
            $model->lines = lines::fromMap($map['Lines']);
        }
        if (isset($map['Ipv6AddrPools'])) {
            $model->ipv6AddrPools = ipv6AddrPools::fromMap($map['Ipv6AddrPools']);
        }
        if (isset($map['DomainAddrPools'])) {
            $model->domainAddrPools = domainAddrPools::fromMap($map['DomainAddrPools']);
        }
        if (isset($map['SelectedIpv4Lines'])) {
            $model->selectedIpv4Lines = selectedIpv4Lines::fromMap($map['SelectedIpv4Lines']);
        }
        if (isset($map['SelectedIpv6Lines'])) {
            $model->selectedIpv6Lines = selectedIpv6Lines::fromMap($map['SelectedIpv6Lines']);
        }
        if (isset($map['SelectedDomainLines'])) {
            $model->selectedDomainLines = selectedDomainLines::fromMap($map['SelectedDomainLines']);
        }

        return $model;
    }
}
