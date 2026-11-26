<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetAgentMJobInfoResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetAgentMJobInfoResponseBody\data\agentMDetailResponse\summaryUrls;

class agentMDetailResponse extends Model
{
    /**
     * @var string
     */
    public $summary;

    /**
     * @var summaryUrls[]
     */
    public $summaryUrls;
    protected $_name = [
        'summary' => 'Summary',
        'summaryUrls' => 'SummaryUrls',
    ];

    public function validate()
    {
        if (\is_array($this->summaryUrls)) {
            Model::validateArray($this->summaryUrls);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->summary) {
            $res['Summary'] = $this->summary;
        }

        if (null !== $this->summaryUrls) {
            if (\is_array($this->summaryUrls)) {
                $res['SummaryUrls'] = [];
                $n1 = 0;
                foreach ($this->summaryUrls as $item1) {
                    $res['SummaryUrls'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Summary'])) {
            $model->summary = $map['Summary'];
        }

        if (isset($map['SummaryUrls'])) {
            if (!empty($map['SummaryUrls'])) {
                $model->summaryUrls = [];
                $n1 = 0;
                foreach ($map['SummaryUrls'] as $item1) {
                    $model->summaryUrls[$n1] = summaryUrls::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
