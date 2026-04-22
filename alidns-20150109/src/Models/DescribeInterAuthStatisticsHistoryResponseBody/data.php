<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeInterAuthStatisticsHistoryResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var string
     */
    public $domainName;

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
     * @var int
     */
    public $timestamp;

    /**
     * @var string
     */
    public $zoneName;
    protected $_name = [
        'count' => 'Count',
        'domainName' => 'DomainName',
        'protocol' => 'Protocol',
        'qtype' => 'Qtype',
        'ratio' => 'Ratio',
        'timestamp' => 'Timestamp',
        'zoneName' => 'ZoneName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
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

        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
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
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
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

        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        if (isset($map['ZoneName'])) {
            $model->zoneName = $map['ZoneName'];
        }

        return $model;
    }
}
