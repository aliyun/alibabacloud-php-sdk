<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class NeuronAppVersionUpdateCmd extends Model
{
    /**
     * @var string
     */
    public $appEntry;

    /**
     * @var string
     */
    public $desc;

    /**
     * @var string[]
     */
    public $envs;

    /**
     * @var NeuronAppInfoContent[]
     */
    public $featureDesc;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string[]
     */
    public $imageUrls;

    /**
     * @var string
     */
    public $instructionUrl;

    /**
     * @var string
     */
    public $manageType;

    /**
     * @var int
     */
    public $mobiId;

    /**
     * @var int[]
     */
    public $pbcs;

    /**
     * @var string[]
     */
    public $privateInfo;

    /**
     * @var string[]
     */
    public $scopes;

    /**
     * @var string
     */
    public $sidebar;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $unbindEffect;

    /**
     * @var string[]
     */
    public $unbindReasons;

    /**
     * @var NeuronAppInfoContent[]
     */
    public $updatedFeature;
    protected $_name = [
        'appEntry' => 'appEntry',
        'desc' => 'desc',
        'envs' => 'envs',
        'featureDesc' => 'featureDesc',
        'id' => 'id',
        'imageUrls' => 'imageUrls',
        'instructionUrl' => 'instructionUrl',
        'manageType' => 'manageType',
        'mobiId' => 'mobiId',
        'pbcs' => 'pbcs',
        'privateInfo' => 'privateInfo',
        'scopes' => 'scopes',
        'sidebar' => 'sidebar',
        'status' => 'status',
        'unbindEffect' => 'unbindEffect',
        'unbindReasons' => 'unbindReasons',
        'updatedFeature' => 'updatedFeature',
    ];

    public function validate()
    {
        if (\is_array($this->envs)) {
            Model::validateArray($this->envs);
        }
        if (\is_array($this->featureDesc)) {
            Model::validateArray($this->featureDesc);
        }
        if (\is_array($this->imageUrls)) {
            Model::validateArray($this->imageUrls);
        }
        if (\is_array($this->pbcs)) {
            Model::validateArray($this->pbcs);
        }
        if (\is_array($this->privateInfo)) {
            Model::validateArray($this->privateInfo);
        }
        if (\is_array($this->scopes)) {
            Model::validateArray($this->scopes);
        }
        if (\is_array($this->unbindReasons)) {
            Model::validateArray($this->unbindReasons);
        }
        if (\is_array($this->updatedFeature)) {
            Model::validateArray($this->updatedFeature);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appEntry) {
            $res['appEntry'] = $this->appEntry;
        }

        if (null !== $this->desc) {
            $res['desc'] = $this->desc;
        }

        if (null !== $this->envs) {
            if (\is_array($this->envs)) {
                $res['envs'] = [];
                $n1 = 0;
                foreach ($this->envs as $item1) {
                    $res['envs'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->featureDesc) {
            if (\is_array($this->featureDesc)) {
                $res['featureDesc'] = [];
                $n1 = 0;
                foreach ($this->featureDesc as $item1) {
                    $res['featureDesc'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->imageUrls) {
            if (\is_array($this->imageUrls)) {
                $res['imageUrls'] = [];
                $n1 = 0;
                foreach ($this->imageUrls as $item1) {
                    $res['imageUrls'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->instructionUrl) {
            $res['instructionUrl'] = $this->instructionUrl;
        }

        if (null !== $this->manageType) {
            $res['manageType'] = $this->manageType;
        }

        if (null !== $this->mobiId) {
            $res['mobiId'] = $this->mobiId;
        }

        if (null !== $this->pbcs) {
            if (\is_array($this->pbcs)) {
                $res['pbcs'] = [];
                $n1 = 0;
                foreach ($this->pbcs as $item1) {
                    $res['pbcs'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->privateInfo) {
            if (\is_array($this->privateInfo)) {
                $res['privateInfo'] = [];
                $n1 = 0;
                foreach ($this->privateInfo as $item1) {
                    $res['privateInfo'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->scopes) {
            if (\is_array($this->scopes)) {
                $res['scopes'] = [];
                $n1 = 0;
                foreach ($this->scopes as $item1) {
                    $res['scopes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sidebar) {
            $res['sidebar'] = $this->sidebar;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->unbindEffect) {
            $res['unbindEffect'] = $this->unbindEffect;
        }

        if (null !== $this->unbindReasons) {
            if (\is_array($this->unbindReasons)) {
                $res['unbindReasons'] = [];
                $n1 = 0;
                foreach ($this->unbindReasons as $item1) {
                    $res['unbindReasons'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->updatedFeature) {
            if (\is_array($this->updatedFeature)) {
                $res['updatedFeature'] = [];
                $n1 = 0;
                foreach ($this->updatedFeature as $item1) {
                    $res['updatedFeature'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['appEntry'])) {
            $model->appEntry = $map['appEntry'];
        }

        if (isset($map['desc'])) {
            $model->desc = $map['desc'];
        }

        if (isset($map['envs'])) {
            if (!empty($map['envs'])) {
                $model->envs = [];
                $n1 = 0;
                foreach ($map['envs'] as $item1) {
                    $model->envs[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['featureDesc'])) {
            if (!empty($map['featureDesc'])) {
                $model->featureDesc = [];
                $n1 = 0;
                foreach ($map['featureDesc'] as $item1) {
                    $model->featureDesc[$n1] = NeuronAppInfoContent::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['imageUrls'])) {
            if (!empty($map['imageUrls'])) {
                $model->imageUrls = [];
                $n1 = 0;
                foreach ($map['imageUrls'] as $item1) {
                    $model->imageUrls[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['instructionUrl'])) {
            $model->instructionUrl = $map['instructionUrl'];
        }

        if (isset($map['manageType'])) {
            $model->manageType = $map['manageType'];
        }

        if (isset($map['mobiId'])) {
            $model->mobiId = $map['mobiId'];
        }

        if (isset($map['pbcs'])) {
            if (!empty($map['pbcs'])) {
                $model->pbcs = [];
                $n1 = 0;
                foreach ($map['pbcs'] as $item1) {
                    $model->pbcs[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['privateInfo'])) {
            if (!empty($map['privateInfo'])) {
                $model->privateInfo = [];
                $n1 = 0;
                foreach ($map['privateInfo'] as $item1) {
                    $model->privateInfo[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['scopes'])) {
            if (!empty($map['scopes'])) {
                $model->scopes = [];
                $n1 = 0;
                foreach ($map['scopes'] as $item1) {
                    $model->scopes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['sidebar'])) {
            $model->sidebar = $map['sidebar'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['unbindEffect'])) {
            $model->unbindEffect = $map['unbindEffect'];
        }

        if (isset($map['unbindReasons'])) {
            if (!empty($map['unbindReasons'])) {
                $model->unbindReasons = [];
                $n1 = 0;
                foreach ($map['unbindReasons'] as $item1) {
                    $model->unbindReasons[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['updatedFeature'])) {
            if (!empty($map['updatedFeature'])) {
                $model->updatedFeature = [];
                $n1 = 0;
                foreach ($map['updatedFeature'] as $item1) {
                    $model->updatedFeature[$n1] = NeuronAppInfoContent::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
