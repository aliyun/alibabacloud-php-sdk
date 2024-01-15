<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeAclEntriesResponseBody;

use AlibabaCloud\Tea\Model;

class aclEntries extends Model
{
    /**
     * @description The ACL policy.
     *
     *   **allow**: allows access.
     *   **drop**: denies access.
     *
     * @example allow
     *
     * @var string
     */
    public $policy;

    /**
     * @description The ID of the instance corresponding to the ACL.
     *
     * @example ecd-fsafeweh***
     *
     * @var string
     */
    public $sourceId;

    /**
     * @description The object on which the ACL takes effect.
     *
     *   **vpc**: workspace.
     *   **desktop**: cloud desktop.
     *
     * @example desktop
     *
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'policy'     => 'Policy',
        'sourceId'   => 'SourceId',
        'sourceType' => 'SourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->sourceId) {
            $res['SourceId'] = $this->sourceId;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return aclEntries
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['SourceId'])) {
            $model->sourceId = $map['SourceId'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        return $model;
    }
}
