<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\CreateGADInstanceResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The number of unit nodes that are created by calling this operation.
     *
     * @example 2
     *
     * @var string
     */
    public $createMemberCount;

    /**
     * @description The ID of the global active database cluster.
     *
     * @example gad-rm-bp1npi2j8********
     *
     * @var string
     */
    public $gadInstanceName;

    /**
     * @description The task ID.
     *
     * @example 5374xxxx
     *
     * @var string
     */
    public $taskID;
    protected $_name = [
        'createMemberCount' => 'CreateMemberCount',
        'gadInstanceName'   => 'GadInstanceName',
        'taskID'            => 'TaskID',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createMemberCount) {
            $res['CreateMemberCount'] = $this->createMemberCount;
        }
        if (null !== $this->gadInstanceName) {
            $res['GadInstanceName'] = $this->gadInstanceName;
        }
        if (null !== $this->taskID) {
            $res['TaskID'] = $this->taskID;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateMemberCount'])) {
            $model->createMemberCount = $map['CreateMemberCount'];
        }
        if (isset($map['GadInstanceName'])) {
            $model->gadInstanceName = $map['GadInstanceName'];
        }
        if (isset($map['TaskID'])) {
            $model->taskID = $map['TaskID'];
        }

        return $model;
    }
}
