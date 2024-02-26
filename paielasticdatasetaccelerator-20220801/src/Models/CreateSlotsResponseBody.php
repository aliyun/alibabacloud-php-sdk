<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models;

use AlibabaCloud\Tea\Model;

class CreateSlotsResponseBody extends Model
{
    /**
     * @example A731A84D-55C9-44F7-99BB-E1CF0CF19197
     *
     * @var string
     */
    public $requestId;

    /**
     * @example slot-5zk866779me51jgu3w
     *
     * @var string
     */
    public $slotIds;

    /**
     * @var string[]
     */
    public $summary;
    protected $_name = [
        'requestId' => 'RequestId',
        'slotIds'   => 'SlotIds',
        'summary'   => 'Summary',
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
        if (null !== $this->slotIds) {
            $res['SlotIds'] = $this->slotIds;
        }
        if (null !== $this->summary) {
            $res['Summary'] = $this->summary;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSlotsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SlotIds'])) {
            $model->slotIds = $map['SlotIds'];
        }
        if (isset($map['Summary'])) {
            $model->summary = $map['Summary'];
        }

        return $model;
    }
}
