<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleTemplateAttributeResponseBody\resource\alertTemplates\alertTemplate;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleTemplateAttributeResponseBody\resource\alertTemplates\alertTemplate\escalations\critical;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleTemplateAttributeResponseBody\resource\alertTemplates\alertTemplate\escalations\info;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleTemplateAttributeResponseBody\resource\alertTemplates\alertTemplate\escalations\warn;

class escalations extends Model
{
    /**
     * @var critical
     */
    public $critical;

    /**
     * @var info
     */
    public $info;

    /**
     * @var warn
     */
    public $warn;
    protected $_name = [
        'critical' => 'Critical',
        'info' => 'Info',
        'warn' => 'Warn',
    ];

    public function validate()
    {
        if (null !== $this->critical) {
            $this->critical->validate();
        }
        if (null !== $this->info) {
            $this->info->validate();
        }
        if (null !== $this->warn) {
            $this->warn->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->critical) {
            $res['Critical'] = null !== $this->critical ? $this->critical->toArray($noStream) : $this->critical;
        }

        if (null !== $this->info) {
            $res['Info'] = null !== $this->info ? $this->info->toArray($noStream) : $this->info;
        }

        if (null !== $this->warn) {
            $res['Warn'] = null !== $this->warn ? $this->warn->toArray($noStream) : $this->warn;
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
        if (isset($map['Critical'])) {
            $model->critical = critical::fromMap($map['Critical']);
        }

        if (isset($map['Info'])) {
            $model->info = info::fromMap($map['Info']);
        }

        if (isset($map['Warn'])) {
            $model->warn = warn::fromMap($map['Warn']);
        }

        return $model;
    }
}
