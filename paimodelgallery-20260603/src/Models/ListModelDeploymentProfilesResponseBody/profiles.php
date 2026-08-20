<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIModelGallery\V20260603\Models\ListModelDeploymentProfilesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PAIModelGallery\V20260603\Models\ListModelDeploymentProfilesResponseBody\profiles\devices;
use AlibabaCloud\SDK\PAIModelGallery\V20260603\Models\ListModelDeploymentProfilesResponseBody\profiles\members;

class profiles extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var devices[]
     */
    public $devices;

    /**
     * @var string
     */
    public $framework;

    /**
     * @var string[]
     */
    public $labels;

    /**
     * @var members[]
     */
    public $members;

    /**
     * @var string[]
     */
    public $optimizations;

    /**
     * @var string
     */
    public $profileId;

    /**
     * @var string
     */
    public $scenario;
    protected $_name = [
        'category' => 'Category',
        'devices' => 'Devices',
        'framework' => 'Framework',
        'labels' => 'Labels',
        'members' => 'Members',
        'optimizations' => 'Optimizations',
        'profileId' => 'ProfileId',
        'scenario' => 'Scenario',
    ];

    public function validate()
    {
        if (\is_array($this->devices)) {
            Model::validateArray($this->devices);
        }
        if (\is_array($this->labels)) {
            Model::validateArray($this->labels);
        }
        if (\is_array($this->members)) {
            Model::validateArray($this->members);
        }
        if (\is_array($this->optimizations)) {
            Model::validateArray($this->optimizations);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->devices) {
            if (\is_array($this->devices)) {
                $res['Devices'] = [];
                $n1 = 0;
                foreach ($this->devices as $item1) {
                    $res['Devices'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->framework) {
            $res['Framework'] = $this->framework;
        }

        if (null !== $this->labels) {
            if (\is_array($this->labels)) {
                $res['Labels'] = [];
                foreach ($this->labels as $key1 => $value1) {
                    $res['Labels'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->members) {
            if (\is_array($this->members)) {
                $res['Members'] = [];
                $n1 = 0;
                foreach ($this->members as $item1) {
                    $res['Members'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->optimizations) {
            if (\is_array($this->optimizations)) {
                $res['Optimizations'] = [];
                foreach ($this->optimizations as $key1 => $value1) {
                    $res['Optimizations'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->profileId) {
            $res['ProfileId'] = $this->profileId;
        }

        if (null !== $this->scenario) {
            $res['Scenario'] = $this->scenario;
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
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['Devices'])) {
            if (!empty($map['Devices'])) {
                $model->devices = [];
                $n1 = 0;
                foreach ($map['Devices'] as $item1) {
                    $model->devices[$n1] = devices::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Framework'])) {
            $model->framework = $map['Framework'];
        }

        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                foreach ($map['Labels'] as $key1 => $value1) {
                    $model->labels[$key1] = $value1;
                }
            }
        }

        if (isset($map['Members'])) {
            if (!empty($map['Members'])) {
                $model->members = [];
                $n1 = 0;
                foreach ($map['Members'] as $item1) {
                    $model->members[$n1] = members::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Optimizations'])) {
            if (!empty($map['Optimizations'])) {
                $model->optimizations = [];
                foreach ($map['Optimizations'] as $key1 => $value1) {
                    $model->optimizations[$key1] = $value1;
                }
            }
        }

        if (isset($map['ProfileId'])) {
            $model->profileId = $map['ProfileId'];
        }

        if (isset($map['Scenario'])) {
            $model->scenario = $map['Scenario'];
        }

        return $model;
    }
}
