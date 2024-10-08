<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\SDK\ESA\V20240910\Models\WafBatchRuleShared\actions;
use AlibabaCloud\Tea\Model;

class WafBatchRuleShared extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var actions
     */
    public $actions;

    /**
     * @var int
     */
    public $crossSiteId;

    /**
     * @var string
     */
    public $expression;

    /**
     * @var WafRuleMatch2
     */
    public $match;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $target;
    protected $_name = [
        'action'      => 'Action',
        'actions'     => 'Actions',
        'crossSiteId' => 'CrossSiteId',
        'expression'  => 'Expression',
        'match'       => 'Match',
        'mode'        => 'Mode',
        'name'        => 'Name',
        'target'      => 'Target',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->actions) {
            $res['Actions'] = null !== $this->actions ? $this->actions->toMap() : null;
        }
        if (null !== $this->crossSiteId) {
            $res['CrossSiteId'] = $this->crossSiteId;
        }
        if (null !== $this->expression) {
            $res['Expression'] = $this->expression;
        }
        if (null !== $this->match) {
            $res['Match'] = null !== $this->match ? $this->match->toMap() : null;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return WafBatchRuleShared
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['Actions'])) {
            $model->actions = actions::fromMap($map['Actions']);
        }
        if (isset($map['CrossSiteId'])) {
            $model->crossSiteId = $map['CrossSiteId'];
        }
        if (isset($map['Expression'])) {
            $model->expression = $map['Expression'];
        }
        if (isset($map['Match'])) {
            $model->match = WafRuleMatch2::fromMap($map['Match']);
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }

        return $model;
    }
}
