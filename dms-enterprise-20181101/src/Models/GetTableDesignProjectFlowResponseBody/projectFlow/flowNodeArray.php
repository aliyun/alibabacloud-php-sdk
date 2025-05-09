<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTableDesignProjectFlowResponseBody\projectFlow;

use AlibabaCloud\Dara\Model;

class flowNodeArray extends Model
{
    /**
     * @var bool
     */
    public $backToDesign;

    /**
     * @var bool
     */
    public $canSkip;

    /**
     * @var string
     */
    public $nodeRole;

    /**
     * @var string
     */
    public $nodeTitle;

    /**
     * @var int
     */
    public $position;

    /**
     * @var bool
     */
    public $publishAnchor;

    /**
     * @var string[]
     */
    public $publishStrategies;
    protected $_name = [
        'backToDesign' => 'BackToDesign',
        'canSkip' => 'CanSkip',
        'nodeRole' => 'NodeRole',
        'nodeTitle' => 'NodeTitle',
        'position' => 'Position',
        'publishAnchor' => 'PublishAnchor',
        'publishStrategies' => 'PublishStrategies',
    ];

    public function validate()
    {
        if (\is_array($this->publishStrategies)) {
            Model::validateArray($this->publishStrategies);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->publishStrategies)) {
                $res['PublishStrategies'] = [];
                $n1 = 0;
                foreach ($this->publishStrategies as $item1) {
                    $res['PublishStrategies'][$n1++] = $item1;
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
                $model->publishStrategies = [];
                $n1 = 0;
                foreach ($map['PublishStrategies'] as $item1) {
                    $model->publishStrategies[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
