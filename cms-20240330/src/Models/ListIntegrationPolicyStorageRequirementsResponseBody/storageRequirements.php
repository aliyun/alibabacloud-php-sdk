<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\ListIntegrationPolicyStorageRequirementsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListIntegrationPolicyStorageRequirementsResponseBody\storageRequirements\metadata;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListIntegrationPolicyStorageRequirementsResponseBody\storageRequirements\spec;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListIntegrationPolicyStorageRequirementsResponseBody\storageRequirements\status;

class storageRequirements extends Model
{
    /**
     * @var string[]
     */
    public $addonReleaseNames;

    /**
     * @var string
     */
    public $apiVersion;

    /**
     * @var string
     */
    public $kind;

    /**
     * @var metadata
     */
    public $metadata;

    /**
     * @var spec
     */
    public $spec;

    /**
     * @var status
     */
    public $status;
    protected $_name = [
        'addonReleaseNames' => 'addonReleaseNames',
        'apiVersion' => 'apiVersion',
        'kind' => 'kind',
        'metadata' => 'metadata',
        'spec' => 'spec',
        'status' => 'status',
    ];

    public function validate()
    {
        if (\is_array($this->addonReleaseNames)) {
            Model::validateArray($this->addonReleaseNames);
        }
        if (null !== $this->metadata) {
            $this->metadata->validate();
        }
        if (null !== $this->spec) {
            $this->spec->validate();
        }
        if (null !== $this->status) {
            $this->status->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addonReleaseNames) {
            if (\is_array($this->addonReleaseNames)) {
                $res['addonReleaseNames'] = [];
                $n1 = 0;
                foreach ($this->addonReleaseNames as $item1) {
                    $res['addonReleaseNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->apiVersion) {
            $res['apiVersion'] = $this->apiVersion;
        }

        if (null !== $this->kind) {
            $res['kind'] = $this->kind;
        }

        if (null !== $this->metadata) {
            $res['metadata'] = null !== $this->metadata ? $this->metadata->toArray($noStream) : $this->metadata;
        }

        if (null !== $this->spec) {
            $res['spec'] = null !== $this->spec ? $this->spec->toArray($noStream) : $this->spec;
        }

        if (null !== $this->status) {
            $res['status'] = null !== $this->status ? $this->status->toArray($noStream) : $this->status;
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
        if (isset($map['addonReleaseNames'])) {
            if (!empty($map['addonReleaseNames'])) {
                $model->addonReleaseNames = [];
                $n1 = 0;
                foreach ($map['addonReleaseNames'] as $item1) {
                    $model->addonReleaseNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['apiVersion'])) {
            $model->apiVersion = $map['apiVersion'];
        }

        if (isset($map['kind'])) {
            $model->kind = $map['kind'];
        }

        if (isset($map['metadata'])) {
            $model->metadata = metadata::fromMap($map['metadata']);
        }

        if (isset($map['spec'])) {
            $model->spec = spec::fromMap($map['spec']);
        }

        if (isset($map['status'])) {
            $model->status = status::fromMap($map['status']);
        }

        return $model;
    }
}
