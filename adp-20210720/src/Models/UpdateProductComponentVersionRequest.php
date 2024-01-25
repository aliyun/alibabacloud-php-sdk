<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models;

use AlibabaCloud\SDK\Adp\V20210720\Models\UpdateProductComponentVersionRequest\policy;
use AlibabaCloud\Tea\Model;

class UpdateProductComponentVersionRequest extends Model
{
    /**
     * @example replicaCount: 2\n\nresources:\n  limits:\n    cpu: 200m\n    memory: 512Mi\n  requests:\n    cpu: 100m\n    memory: 256Mi
     *
     * @var string
     */
    public $componentOrchestrationValues;

    /**
     * @var string
     */
    public $componentSpecificationUid;

    /**
     * @var string
     */
    public $componentSpecificationValues;

    /**
     * @example true
     *
     * @var bool
     */
    public $enable;

    /**
     * @example 9963a9ec-95d0-4e82-88c8-xxxxxxxxxxxx
     *
     * @var string
     */
    public $newComponentVersionUID;

    /**
     * @var policy
     */
    public $policy;

    /**
     * @example component-release
     *
     * @var string
     */
    public $releaseName;

    /**
     * @var bool
     */
    public $unsetComponentVersionSpec;
    protected $_name = [
        'componentOrchestrationValues' => 'componentOrchestrationValues',
        'componentSpecificationUid'    => 'componentSpecificationUid',
        'componentSpecificationValues' => 'componentSpecificationValues',
        'enable'                       => 'enable',
        'newComponentVersionUID'       => 'newComponentVersionUID',
        'policy'                       => 'policy',
        'releaseName'                  => 'releaseName',
        'unsetComponentVersionSpec'    => 'unsetComponentVersionSpec',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->componentOrchestrationValues) {
            $res['componentOrchestrationValues'] = $this->componentOrchestrationValues;
        }
        if (null !== $this->componentSpecificationUid) {
            $res['componentSpecificationUid'] = $this->componentSpecificationUid;
        }
        if (null !== $this->componentSpecificationValues) {
            $res['componentSpecificationValues'] = $this->componentSpecificationValues;
        }
        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }
        if (null !== $this->newComponentVersionUID) {
            $res['newComponentVersionUID'] = $this->newComponentVersionUID;
        }
        if (null !== $this->policy) {
            $res['policy'] = null !== $this->policy ? $this->policy->toMap() : null;
        }
        if (null !== $this->releaseName) {
            $res['releaseName'] = $this->releaseName;
        }
        if (null !== $this->unsetComponentVersionSpec) {
            $res['unsetComponentVersionSpec'] = $this->unsetComponentVersionSpec;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateProductComponentVersionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['componentOrchestrationValues'])) {
            $model->componentOrchestrationValues = $map['componentOrchestrationValues'];
        }
        if (isset($map['componentSpecificationUid'])) {
            $model->componentSpecificationUid = $map['componentSpecificationUid'];
        }
        if (isset($map['componentSpecificationValues'])) {
            $model->componentSpecificationValues = $map['componentSpecificationValues'];
        }
        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }
        if (isset($map['newComponentVersionUID'])) {
            $model->newComponentVersionUID = $map['newComponentVersionUID'];
        }
        if (isset($map['policy'])) {
            $model->policy = policy::fromMap($map['policy']);
        }
        if (isset($map['releaseName'])) {
            $model->releaseName = $map['releaseName'];
        }
        if (isset($map['unsetComponentVersionSpec'])) {
            $model->unsetComponentVersionSpec = $map['unsetComponentVersionSpec'];
        }

        return $model;
    }
}
