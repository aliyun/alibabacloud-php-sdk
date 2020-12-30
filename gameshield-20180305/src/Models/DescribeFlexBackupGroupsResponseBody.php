<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models;

use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeFlexBackupGroupsResponseBody\allBackupGroups;
use AlibabaCloud\Tea\Model;

class DescribeFlexBackupGroupsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var mixed[]
     */
    public $promptInfo;

    /**
     * @var allBackupGroups
     */
    public $allBackupGroups;
    protected $_name = [
        'requestId'       => 'RequestId',
        'promptInfo'      => 'PromptInfo',
        'allBackupGroups' => 'AllBackupGroups',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->promptInfo) {
            $res['PromptInfo'] = $this->promptInfo;
        }
        if (null !== $this->allBackupGroups) {
            $res['AllBackupGroups'] = null !== $this->allBackupGroups ? $this->allBackupGroups->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFlexBackupGroupsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PromptInfo'])) {
            $model->promptInfo = $map['PromptInfo'];
        }
        if (isset($map['AllBackupGroups'])) {
            $model->allBackupGroups = allBackupGroups::fromMap($map['AllBackupGroups']);
        }

        return $model;
    }
}
