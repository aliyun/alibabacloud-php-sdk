<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\UpdateRouteMapRuleRequest;

use AlibabaCloud\Dara\Model;

class setActions extends Model
{
    /**
     * @var int[]
     */
    public $asPathPrepend;

    /**
     * @var int[]
     */
    public $asPathReplace;

    /**
     * @var string[]
     */
    public $communityAdd;

    /**
     * @var string[]
     */
    public $communityReplace;

    /**
     * @var int
     */
    public $nextPriority;

    /**
     * @var string
     */
    public $routeAction;
    protected $_name = [
        'asPathPrepend' => 'AsPathPrepend',
        'asPathReplace' => 'AsPathReplace',
        'communityAdd' => 'CommunityAdd',
        'communityReplace' => 'CommunityReplace',
        'nextPriority' => 'NextPriority',
        'routeAction' => 'RouteAction',
    ];

    public function validate()
    {
        if (\is_array($this->asPathPrepend)) {
            Model::validateArray($this->asPathPrepend);
        }
        if (\is_array($this->asPathReplace)) {
            Model::validateArray($this->asPathReplace);
        }
        if (\is_array($this->communityAdd)) {
            Model::validateArray($this->communityAdd);
        }
        if (\is_array($this->communityReplace)) {
            Model::validateArray($this->communityReplace);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->asPathPrepend) {
            if (\is_array($this->asPathPrepend)) {
                $res['AsPathPrepend'] = [];
                $n1 = 0;
                foreach ($this->asPathPrepend as $item1) {
                    $res['AsPathPrepend'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->asPathReplace) {
            if (\is_array($this->asPathReplace)) {
                $res['AsPathReplace'] = [];
                $n1 = 0;
                foreach ($this->asPathReplace as $item1) {
                    $res['AsPathReplace'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->communityAdd) {
            if (\is_array($this->communityAdd)) {
                $res['CommunityAdd'] = [];
                $n1 = 0;
                foreach ($this->communityAdd as $item1) {
                    $res['CommunityAdd'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->communityReplace) {
            if (\is_array($this->communityReplace)) {
                $res['CommunityReplace'] = [];
                $n1 = 0;
                foreach ($this->communityReplace as $item1) {
                    $res['CommunityReplace'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nextPriority) {
            $res['NextPriority'] = $this->nextPriority;
        }

        if (null !== $this->routeAction) {
            $res['RouteAction'] = $this->routeAction;
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
        if (isset($map['AsPathPrepend'])) {
            if (!empty($map['AsPathPrepend'])) {
                $model->asPathPrepend = [];
                $n1 = 0;
                foreach ($map['AsPathPrepend'] as $item1) {
                    $model->asPathPrepend[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AsPathReplace'])) {
            if (!empty($map['AsPathReplace'])) {
                $model->asPathReplace = [];
                $n1 = 0;
                foreach ($map['AsPathReplace'] as $item1) {
                    $model->asPathReplace[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['CommunityAdd'])) {
            if (!empty($map['CommunityAdd'])) {
                $model->communityAdd = [];
                $n1 = 0;
                foreach ($map['CommunityAdd'] as $item1) {
                    $model->communityAdd[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['CommunityReplace'])) {
            if (!empty($map['CommunityReplace'])) {
                $model->communityReplace = [];
                $n1 = 0;
                foreach ($map['CommunityReplace'] as $item1) {
                    $model->communityReplace[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['NextPriority'])) {
            $model->nextPriority = $map['NextPriority'];
        }

        if (isset($map['RouteAction'])) {
            $model->routeAction = $map['RouteAction'];
        }

        return $model;
    }
}
