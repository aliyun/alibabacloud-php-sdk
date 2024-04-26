<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTableDesignProjectFlowResponseBody\projectFlow;

use AlibabaCloud\Tea\Model;

class flowNodeArray extends Model
{
    /**
     * @example 1
     *
     * @var bool
     */
    public $backToDesign;

    /**
     * @example 0
     *
     * @var bool
     */
    public $canSkip;

    /**
     * @example DESIGN
     *
     * @var string
     */
    public $nodeRole;

    /**
     * @var string
     */
    public $nodeTitle;

    /**
     * @example 1
     *
     * @var int
     */
    public $position;

    /**
     * @example false
     *
     * @var bool
     */
    public $publishAnchor;

    /**
     * @var string[]
     */
    public $publishStrategies;
    protected $_name = [
        'backToDesign'      => 'BackToDesign',
        'canSkip'           => 'CanSkip',
        'nodeRole'          => 'NodeRole',
        'nodeTitle'         => 'NodeTitle',
        'position'          => 'Position',
        'publishAnchor'     => 'PublishAnchor',
        'publishStrategies' => 'PublishStrategies',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backToDesign) {
            $res['BackToDesign'] = $this->backToDesign;
        }
        if (null !== $this->canSkip) {
            $res['CanSkip'] = $this->canSkip;
        }
        if (null !== $this->nodeRole) {
            $res['NodeRole'] = $this->nodeRole;
        }
        if (null !== $this->nodeTitle) {
            $res['NodeTitle'] = $this->nodeTitle;
        }
        if (null !== $this->position) {
            $res['Position'] = $this->position;
        }
        if (null !== $this->publishAnchor) {
            $res['PublishAnchor'] = $this->publishAnchor;
        }
        if (null !== $this->publishStrategies) {
            $res['PublishStrategies'] = $this->publishStrategies;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flowNodeArray
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackToDesign'])) {
            $model->backToDesign = $map['BackToDesign'];
        }
        if (isset($map['CanSkip'])) {
            $model->canSkip = $map['CanSkip'];
        }
        if (isset($map['NodeRole'])) {
            $model->nodeRole = $map['NodeRole'];
        }
        if (isset($map['NodeTitle'])) {
            $model->nodeTitle = $map['NodeTitle'];
        }
        if (isset($map['Position'])) {
            $model->position = $map['Position'];
        }
        if (isset($map['PublishAnchor'])) {
            $model->publishAnchor = $map['PublishAnchor'];
        }
        if (isset($map['PublishStrategies'])) {
            if (!empty($map['PublishStrategies'])) {
                $model->publishStrategies = $map['PublishStrategies'];
            }
        }

        return $model;
    }
}
