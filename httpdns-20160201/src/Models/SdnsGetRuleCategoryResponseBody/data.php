<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Httpdns\V20160201\Models\SdnsGetRuleCategoryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Httpdns\V20160201\Models\SdnsGetRuleCategoryResponseBody\data\recordLine;
use AlibabaCloud\SDK\Httpdns\V20160201\Models\SdnsGetRuleCategoryResponseBody\data\region;
use AlibabaCloud\SDK\Httpdns\V20160201\Models\SdnsGetRuleCategoryResponseBody\data\rules;

class data extends Model
{
    /**
     * @var string[]
     */
    public $clientIpRanges;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $matchType;

    /**
     * @var recordLine
     */
    public $recordLine;

    /**
     * @var region
     */
    public $region;

    /**
     * @var rules[]
     */
    public $rules;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'clientIpRanges' => 'ClientIpRanges',
        'domainName' => 'DomainName',
        'id' => 'Id',
        'matchType' => 'MatchType',
        'recordLine' => 'RecordLine',
        'region' => 'Region',
        'rules' => 'Rules',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->clientIpRanges)) {
            Model::validateArray($this->clientIpRanges);
        }
        if (null !== $this->recordLine) {
            $this->recordLine->validate();
        }
        if (null !== $this->region) {
            $this->region->validate();
        }
        if (\is_array($this->rules)) {
            Model::validateArray($this->rules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientIpRanges) {
            if (\is_array($this->clientIpRanges)) {
                $res['ClientIpRanges'] = [];
                $n1 = 0;
                foreach ($this->clientIpRanges as $item1) {
                    $res['ClientIpRanges'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->matchType) {
            $res['MatchType'] = $this->matchType;
        }

        if (null !== $this->recordLine) {
            $res['RecordLine'] = null !== $this->recordLine ? $this->recordLine->toArray($noStream) : $this->recordLine;
        }

        if (null !== $this->region) {
            $res['Region'] = null !== $this->region ? $this->region->toArray($noStream) : $this->region;
        }

        if (null !== $this->rules) {
            if (\is_array($this->rules)) {
                $res['Rules'] = [];
                $n1 = 0;
                foreach ($this->rules as $item1) {
                    $res['Rules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['ClientIpRanges'])) {
            if (!empty($map['ClientIpRanges'])) {
                $model->clientIpRanges = [];
                $n1 = 0;
                foreach ($map['ClientIpRanges'] as $item1) {
                    $model->clientIpRanges[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['MatchType'])) {
            $model->matchType = $map['MatchType'];
        }

        if (isset($map['RecordLine'])) {
            $model->recordLine = recordLine::fromMap($map['RecordLine']);
        }

        if (isset($map['Region'])) {
            $model->region = region::fromMap($map['Region']);
        }

        if (isset($map['Rules'])) {
            if (!empty($map['Rules'])) {
                $model->rules = [];
                $n1 = 0;
                foreach ($map['Rules'] as $item1) {
                    $model->rules[$n1] = rules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
