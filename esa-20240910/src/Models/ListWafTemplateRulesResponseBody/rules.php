<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListWafTemplateRulesResponseBody;

use AlibabaCloud\SDK\ESA\V20240910\Models\WafRuleConfig;
use AlibabaCloud\Tea\Model;

class rules extends Model
{
    /**
     * @description The configuration of the rule.
     *
     * @var WafRuleConfig
     */
    public $config;

    /**
     * @description The rule name.
     *
     * @example HTTP Directory Traversal Rule [Template]
     *
     * @var string
     */
    public $name;

    /**
     * @description The WAF rule category.
     *
     * @example http_anti_scan
     *
     * @var string
     */
    public $phase;

    /**
     * @description Indicates whether the rule is enabled.
     *
     * @example on
     *
     * @var string
     */
    public $status;

    /**
     * @description The rule type.
     *
     * @example http_directory_traversal
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'config' => 'Config',
        'name' => 'Name',
        'phase' => 'Phase',
        'status' => 'Status',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = null !== $this->config ? $this->config->toMap() : null;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->phase) {
            $res['Phase'] = $this->phase;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Config'])) {
            $model->config = WafRuleConfig::fromMap($map['Config']);
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Phase'])) {
            $model->phase = $map['Phase'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
