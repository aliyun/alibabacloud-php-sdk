<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeInterAuthStatisticsSummaryResponseBody;

use AlibabaCloud\Dara\Model;

class pageData extends Model
{
    /**
     * @var int
     */
    public $aggrTimestamp;

    /**
     * @var int
     */
    public $count;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var int
     */
    public $fluctuationValue;

    /**
     * @var string
     */
    public $line;

    /**
     * @var int
     */
    public $previousCount;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $qtype;

    /**
     * @var int
     */
    public $ratio;

    /**
     * @var string
     */
    public $rcode;

    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $sourceIsp;

    /**
     * @var string
     */
    public $sourceRegion;

    /**
     * @var string
     */
    public $zoneName;
    protected $_name = [
        'aggrTimestamp' => 'AggrTimestamp',
        'count' => 'Count',
        'domainName' => 'DomainName',
        'fluctuationValue' => 'FluctuationValue',
        'line' => 'Line',
        'previousCount' => 'PreviousCount',
        'protocol' => 'Protocol',
        'qtype' => 'Qtype',
        'ratio' => 'Ratio',
        'rcode' => 'Rcode',
        'sourceIp' => 'SourceIp',
        'sourceIsp' => 'SourceIsp',
        'sourceRegion' => 'SourceRegion',
        'zoneName' => 'ZoneName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aggrTimestamp) {
            $res['AggrTimestamp'] = $this->aggrTimestamp;
        }

        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->fluctuationValue) {
            $res['FluctuationValue'] = $this->fluctuationValue;
        }

        if (null !== $this->line) {
            $res['Line'] = $this->line;
        }

        if (null !== $this->previousCount) {
            $res['PreviousCount'] = $this->previousCount;
        }

        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }

        if (null !== $this->qtype) {
            $res['Qtype'] = $this->qtype;
        }

        if (null !== $this->ratio) {
            $res['Ratio'] = $this->ratio;
        }

        if (null !== $this->rcode) {
            $res['Rcode'] = $this->rcode;
        }

        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        if (null !== $this->sourceIsp) {
            $res['SourceIsp'] = $this->sourceIsp;
        }

        if (null !== $this->sourceRegion) {
            $res['SourceRegion'] = $this->sourceRegion;
        }

        if (null !== $this->zoneName) {
            $res['ZoneName'] = $this->zoneName;
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
        if (isset($map['AggrTimestamp'])) {
            $model->aggrTimestamp = $map['AggrTimestamp'];
        }

        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['FluctuationValue'])) {
            $model->fluctuationValue = $map['FluctuationValue'];
        }

        if (isset($map['Line'])) {
            $model->line = $map['Line'];
        }

        if (isset($map['PreviousCount'])) {
            $model->previousCount = $map['PreviousCount'];
        }

        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        if (isset($map['Qtype'])) {
            $model->qtype = $map['Qtype'];
        }

        if (isset($map['Ratio'])) {
            $model->ratio = $map['Ratio'];
        }

        if (isset($map['Rcode'])) {
            $model->rcode = $map['Rcode'];
        }

        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        if (isset($map['SourceIsp'])) {
            $model->sourceIsp = $map['SourceIsp'];
        }

        if (isset($map['SourceRegion'])) {
            $model->sourceRegion = $map['SourceRegion'];
        }

        if (isset($map['ZoneName'])) {
            $model->zoneName = $map['ZoneName'];
        }

        return $model;
    }
}
