<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribePolarClawAgentToolsResponseBody;

use AlibabaCloud\Dara\Model;

class currentConfig extends Model
{
    /**
     * @var string[]
     */
    public $allow;

    /**
     * @var string[]
     */
    public $alsoAllow;

    /**
     * @var string[]
     */
    public $deny;

    /**
     * @var string
     */
    public $profile;
    protected $_name = [
        'allow' => 'Allow',
        'alsoAllow' => 'AlsoAllow',
        'deny' => 'Deny',
        'profile' => 'Profile',
    ];

    public function validate()
    {
        if (\is_array($this->allow)) {
            Model::validateArray($this->allow);
        }
        if (\is_array($this->alsoAllow)) {
            Model::validateArray($this->alsoAllow);
        }
        if (\is_array($this->deny)) {
            Model::validateArray($this->deny);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allow) {
            if (\is_array($this->allow)) {
                $res['Allow'] = [];
                $n1 = 0;
                foreach ($this->allow as $item1) {
                    $res['Allow'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->alsoAllow) {
            if (\is_array($this->alsoAllow)) {
                $res['AlsoAllow'] = [];
                $n1 = 0;
                foreach ($this->alsoAllow as $item1) {
                    $res['AlsoAllow'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->deny) {
            if (\is_array($this->deny)) {
                $res['Deny'] = [];
                $n1 = 0;
                foreach ($this->deny as $item1) {
                    $res['Deny'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->profile) {
            $res['Profile'] = $this->profile;
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
        if (isset($map['Allow'])) {
            if (!empty($map['Allow'])) {
                $model->allow = [];
                $n1 = 0;
                foreach ($map['Allow'] as $item1) {
                    $model->allow[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AlsoAllow'])) {
            if (!empty($map['AlsoAllow'])) {
                $model->alsoAllow = [];
                $n1 = 0;
                foreach ($map['AlsoAllow'] as $item1) {
                    $model->alsoAllow[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Deny'])) {
            if (!empty($map['Deny'])) {
                $model->deny = [];
                $n1 = 0;
                foreach ($map['Deny'] as $item1) {
                    $model->deny[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Profile'])) {
            $model->profile = $map['Profile'];
        }

        return $model;
    }
}
