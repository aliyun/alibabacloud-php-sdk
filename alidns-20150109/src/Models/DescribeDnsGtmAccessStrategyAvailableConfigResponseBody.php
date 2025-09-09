<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategyAvailableConfigResponseBody\domainAddrPools;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategyAvailableConfigResponseBody\ipv4AddrPools;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategyAvailableConfigResponseBody\ipv6AddrPools;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategyAvailableConfigResponseBody\lines;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategyAvailableConfigResponseBody\selectedDomainLines;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategyAvailableConfigResponseBody\selectedIpv4Lines;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategyAvailableConfigResponseBody\selectedIpv6Lines;

class DescribeDnsGtmAccessStrategyAvailableConfigResponseBody extends Model
{
    /**
     * @var domainAddrPools
     */
    public $domainAddrPools;

    /**
     * @var ipv4AddrPools
     */
    public $ipv4AddrPools;

    /**
     * @var ipv6AddrPools
     */
    public $ipv6AddrPools;

    /**
     * @var lines
     */
    public $lines;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var selectedDomainLines
     */
    public $selectedDomainLines;

    /**
     * @var selectedIpv4Lines
     */
    public $selectedIpv4Lines;

    /**
     * @var selectedIpv6Lines
     */
    public $selectedIpv6Lines;

    /**
     * @var bool
     */
    public $suggestSetDefaultLine;
    protected $_name = [
        'domainAddrPools' => 'DomainAddrPools',
        'ipv4AddrPools' => 'Ipv4AddrPools',
        'ipv6AddrPools' => 'Ipv6AddrPools',
        'lines' => 'Lines',
        'requestId' => 'RequestId',
        'selectedDomainLines' => 'SelectedDomainLines',
        'selectedIpv4Lines' => 'SelectedIpv4Lines',
        'selectedIpv6Lines' => 'SelectedIpv6Lines',
        'suggestSetDefaultLine' => 'SuggestSetDefaultLine',
    ];

    public function validate()
    {
        if (null !== $this->domainAddrPools) {
            $this->domainAddrPools->validate();
        }
        if (null !== $this->ipv4AddrPools) {
            $this->ipv4AddrPools->validate();
        }
        if (null !== $this->ipv6AddrPools) {
            $this->ipv6AddrPools->validate();
        }
        if (null !== $this->lines) {
            $this->lines->validate();
        }
        if (null !== $this->selectedDomainLines) {
            $this->selectedDomainLines->validate();
        }
        if (null !== $this->selectedIpv4Lines) {
            $this->selectedIpv4Lines->validate();
        }
        if (null !== $this->selectedIpv6Lines) {
            $this->selectedIpv6Lines->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainAddrPools) {
            $res['DomainAddrPools'] = null !== $this->domainAddrPools ? $this->domainAddrPools->toArray($noStream) : $this->domainAddrPools;
        }

        if (null !== $this->ipv4AddrPools) {
            $res['Ipv4AddrPools'] = null !== $this->ipv4AddrPools ? $this->ipv4AddrPools->toArray($noStream) : $this->ipv4AddrPools;
        }

        if (null !== $this->ipv6AddrPools) {
            $res['Ipv6AddrPools'] = null !== $this->ipv6AddrPools ? $this->ipv6AddrPools->toArray($noStream) : $this->ipv6AddrPools;
        }

        if (null !== $this->lines) {
            $res['Lines'] = null !== $this->lines ? $this->lines->toArray($noStream) : $this->lines;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->selectedDomainLines) {
            $res['SelectedDomainLines'] = null !== $this->selectedDomainLines ? $this->selectedDomainLines->toArray($noStream) : $this->selectedDomainLines;
        }

        if (null !== $this->selectedIpv4Lines) {
            $res['SelectedIpv4Lines'] = null !== $this->selectedIpv4Lines ? $this->selectedIpv4Lines->toArray($noStream) : $this->selectedIpv4Lines;
        }

        if (null !== $this->selectedIpv6Lines) {
            $res['SelectedIpv6Lines'] = null !== $this->selectedIpv6Lines ? $this->selectedIpv6Lines->toArray($noStream) : $this->selectedIpv6Lines;
        }

        if (null !== $this->suggestSetDefaultLine) {
            $res['SuggestSetDefaultLine'] = $this->suggestSetDefaultLine;
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
        if (isset($map['DomainAddrPools'])) {
            $model->domainAddrPools = domainAddrPools::fromMap($map['DomainAddrPools']);
        }

        if (isset($map['Ipv4AddrPools'])) {
            $model->ipv4AddrPools = ipv4AddrPools::fromMap($map['Ipv4AddrPools']);
        }

        if (isset($map['Ipv6AddrPools'])) {
            $model->ipv6AddrPools = ipv6AddrPools::fromMap($map['Ipv6AddrPools']);
        }

        if (isset($map['Lines'])) {
            $model->lines = lines::fromMap($map['Lines']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SelectedDomainLines'])) {
            $model->selectedDomainLines = selectedDomainLines::fromMap($map['SelectedDomainLines']);
        }

        if (isset($map['SelectedIpv4Lines'])) {
            $model->selectedIpv4Lines = selectedIpv4Lines::fromMap($map['SelectedIpv4Lines']);
        }

        if (isset($map['SelectedIpv6Lines'])) {
            $model->selectedIpv6Lines = selectedIpv6Lines::fromMap($map['SelectedIpv6Lines']);
        }

        if (isset($map['SuggestSetDefaultLine'])) {
            $model->suggestSetDefaultLine = $map['SuggestSetDefaultLine'];
        }

        return $model;
    }
}
