<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Httpdns\V20160201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Httpdns\V20160201\Models\CreateSdnsRuleCategoryRequest\paths;
use AlibabaCloud\SDK\Httpdns\V20160201\Models\CreateSdnsRuleCategoryRequest\rules;

class CreateSdnsRuleCategoryRequest extends Model
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
     * @var bool
     */
    public $enable;

    /**
     * @var string
     */
    public $lineId;

    /**
     * @var string
     */
    public $matchType;

    /**
     * @var paths[]
     */
    public $paths;

    /**
     * @var rules[]
     */
    public $rules;
    protected $_name = [
        'clientIpRanges' => 'ClientIpRanges',
        'domainName' => 'DomainName',
        'enable' => 'Enable',
        'lineId' => 'LineId',
        'matchType' => 'MatchType',
        'paths' => 'Paths',
        'rules' => 'Rules',
    ];

    public function validate()
    {
        if (\is_array($this->clientIpRanges)) {
            Model::validateArray($this->clientIpRanges);
        }
        if (\is_array($this->paths)) {
            Model::validateArray($this->paths);
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

        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }

        if (null !== $this->lineId) {
            $res['LineId'] = $this->lineId;
        }

        if (null !== $this->matchType) {
            $res['MatchType'] = $this->matchType;
        }

        if (null !== $this->paths) {
            if (\is_array($this->paths)) {
                $res['Paths'] = [];
                $n1 = 0;
                foreach ($this->paths as $item1) {
                    $res['Paths'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }

        if (isset($map['LineId'])) {
            $model->lineId = $map['LineId'];
        }

        if (isset($map['MatchType'])) {
            $model->matchType = $map['MatchType'];
        }

        if (isset($map['Paths'])) {
            if (!empty($map['Paths'])) {
                $model->paths = [];
                $n1 = 0;
                foreach ($map['Paths'] as $item1) {
                    $model->paths[$n1] = paths::fromMap($item1);
                    ++$n1;
                }
            }
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

        return $model;
    }
}
