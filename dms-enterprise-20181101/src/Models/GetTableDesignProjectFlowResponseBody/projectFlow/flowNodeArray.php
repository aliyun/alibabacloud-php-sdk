<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTableDesignProjectFlowResponseBody\projectFlow;

use AlibabaCloud\Tea\Model;

class flowNodeArray extends Model
{
    /**
     * @description Indicates whether the ticket can be returned to the schema design node. Valid values:
     *
     *   **1**: The ticket can be returned to the schema design node.
     *   **0**: The ticket cannot be returned to the schema design node. This value can be returned only for the PUBLISH node.
     *
     * @example 1
     *
     * @var bool
     */
    public $backToDesign;

    /**
     * @description Indicates whether the current node can be skipped. Valid values:
     *
     *   **1**: The current node can be skipped.
     *   **0**: The current node cannot be skipped. This value can be returned only for the PUBLISH node.
     *
     * @example 0
     *
     * @var bool
     */
    public $canSkip;

    /**
     * @description The role of the node in the process.
     *
     *   START: The ticket was created.
     *   DESIGN: The schema is being created.
     *   PUBLISH: The schema is published.
     *   END: The ticket is complete.
     *
     * @example DESIGN
     *
     * @var string
     */
    public $nodeRole;

    /**
     * @description The title of the node.
     *
     * @var string
     */
    public $nodeTitle;

    /**
     * @description The position of the node in the process. The value starts from 1.
     *
     * @example 1
     *
     * @var int
     */
    public $position;

    /**
     * @description Indicates whether the node is the anchor node. A schema design process has only one anchor node, on which the schema is published. After the schema is published on the anchor node, a post-publish image is generated and the DDL metadata lock is released.
     *
     * @example false
     *
     * @var bool
     */
    public $publishAnchor;

    /**
     * @description The available publishing strategies.
     *
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
