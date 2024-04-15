<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeAclEntriesResponseBody;

use AlibabaCloud\Tea\Model;

class aclEntries extends Model
{
    /**
     * @description The ACL type.
     *
     * Valid values:
     *
     *   allow: whitelist
     *   disable: blacklist
     *
     * @example allow
     *
     * @var string
     */
    public $policy;

    /**
     * @description The ID of the instance to which the ACL applies, such as an office network ID or a cloud computer ID.
     *
     * @example ecd-fsafeweh***
     *
     * @var string
     */
    public $sourceId;

    /**
     * @description The granularity of the ACL.
     *
     * Valid values:
     *
     *   desktop: cloud computer
     *   vpc: office network
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
