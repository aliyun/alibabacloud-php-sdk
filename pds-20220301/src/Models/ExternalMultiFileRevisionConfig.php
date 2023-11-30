<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class ExternalMultiFileRevisionConfig extends Model
{
    /**
     * @var int
     */
    public $revisionCount;

    /**
     * @var bool
     */
    public $revisionMergeEnabled;

    /**
     * @var int
     */
    public $revisionRecyclePeriod;
    protected $_name = [
        'revisionCount'         => 'revision_count',
        'revisionMergeEnabled'  => 'revision_merge_enabled',
        'revisionRecyclePeriod' => 'revision_recycle_period',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->revisionCount) {
            $res['revision_count'] = $this->revisionCount;
        }
        if (null !== $this->revisionMergeEnabled) {
            $res['revision_merge_enabled'] = $this->revisionMergeEnabled;
        }
        if (null !== $this->revisionRecyclePeriod) {
            $res['revision_recycle_period'] = $this->revisionRecyclePeriod;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExternalMultiFileRevisionConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['revision_count'])) {
            $model->revisionCount = $map['revision_count'];
        }
        if (isset($map['revision_merge_enabled'])) {
            $model->revisionMergeEnabled = $map['revision_merge_enabled'];
        }
        if (isset($map['revision_recycle_period'])) {
            $model->revisionRecyclePeriod = $map['revision_recycle_period'];
        }

        return $model;
    }
}
