<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\ModifyMetricRuleTemplateRequest\alertTemplates;

use AlibabaCloud\SDK\Cms\V20190101\Models\ModifyMetricRuleTemplateRequest\alertTemplates\escalations\critical;
use AlibabaCloud\SDK\Cms\V20190101\Models\ModifyMetricRuleTemplateRequest\alertTemplates\escalations\info;
use AlibabaCloud\SDK\Cms\V20190101\Models\ModifyMetricRuleTemplateRequest\alertTemplates\escalations\warn;
use AlibabaCloud\Tea\Model;

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
        'info'     => 'Info',
        'warn'     => 'Warn',
    ];

    public function validate()
    {
        Model::validateRequired('critical', $this->critical, true);
        Model::validateRequired('info', $this->info, true);
        Model::validateRequired('warn', $this->warn, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->critical) {
            $res['Critical'] = null !== $this->critical ? $this->critical->toMap() : null;
        }
        if (null !== $this->info) {
            $res['Info'] = null !== $this->info ? $this->info->toMap() : null;
        }
        if (null !== $this->warn) {
            $res['Warn'] = null !== $this->warn ? $this->warn->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return escalations
     */
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
