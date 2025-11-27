<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\ListIntegrationPolicyCollectorsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\AddonMeta;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListIntegrationPolicyCollectorsResponseBody\collectors\conditions;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListIntegrationPolicyCollectorsResponseBody\collectors\workloads;

class collectors extends Model
{
    /**
     * @var AddonMeta
     */
    public $addonMeta;

    /**
     * @var string
     */
    public $collectorName;

    /**
     * @var string
     */
    public $collectorType;

    /**
     * @var conditions[]
     */
    public $conditions;

    /**
     * @var bool
     */
    public $managed;

    /**
     * @var string
     */
    public $releaseName;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $version;

    /**
     * @var workloads[]
     */
    public $workloads;
    protected $_name = [
        'addonMeta' => 'addonMeta',
        'collectorName' => 'collectorName',
        'collectorType' => 'collectorType',
        'conditions' => 'conditions',
        'managed' => 'managed',
        'releaseName' => 'releaseName',
        'state' => 'state',
        'version' => 'version',
        'workloads' => 'workloads',
    ];

    public function validate()
    {
        if (null !== $this->addonMeta) {
            $this->addonMeta->validate();
        }
        if (\is_array($this->conditions)) {
            Model::validateArray($this->conditions);
        }
        if (\is_array($this->workloads)) {
            Model::validateArray($this->workloads);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addonMeta) {
            $res['addonMeta'] = null !== $this->addonMeta ? $this->addonMeta->toArray($noStream) : $this->addonMeta;
        }

        if (null !== $this->collectorName) {
            $res['collectorName'] = $this->collectorName;
        }

        if (null !== $this->collectorType) {
            $res['collectorType'] = $this->collectorType;
        }

        if (null !== $this->conditions) {
            if (\is_array($this->conditions)) {
                $res['conditions'] = [];
                $n1 = 0;
                foreach ($this->conditions as $item1) {
                    $res['conditions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->managed) {
            $res['managed'] = $this->managed;
        }

        if (null !== $this->releaseName) {
            $res['releaseName'] = $this->releaseName;
        }

        if (null !== $this->state) {
            $res['state'] = $this->state;
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        if (null !== $this->workloads) {
            if (\is_array($this->workloads)) {
                $res['workloads'] = [];
                $n1 = 0;
                foreach ($this->workloads as $item1) {
                    $res['workloads'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['addonMeta'])) {
            $model->addonMeta = AddonMeta::fromMap($map['addonMeta']);
        }

        if (isset($map['collectorName'])) {
            $model->collectorName = $map['collectorName'];
        }

        if (isset($map['collectorType'])) {
            $model->collectorType = $map['collectorType'];
        }

        if (isset($map['conditions'])) {
            if (!empty($map['conditions'])) {
                $model->conditions = [];
                $n1 = 0;
                foreach ($map['conditions'] as $item1) {
                    $model->conditions[$n1] = conditions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['managed'])) {
            $model->managed = $map['managed'];
        }

        if (isset($map['releaseName'])) {
            $model->releaseName = $map['releaseName'];
        }

        if (isset($map['state'])) {
            $model->state = $map['state'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        if (isset($map['workloads'])) {
            if (!empty($map['workloads'])) {
                $model->workloads = [];
                $n1 = 0;
                foreach ($map['workloads'] as $item1) {
                    $model->workloads[$n1] = workloads::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
